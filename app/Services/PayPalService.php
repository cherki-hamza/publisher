<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class PayPalService
{
    protected $client;
    protected $clientId;
    protected $secret;
    protected $baseUri;

    public function __construct()
    {
        $this->clientId =  env('PAYPAL_SANDBOX_CLIENT_ID');
        $this->secret =    env('PAYPAL_SANDBOX_CLIENT_SECRET');
        $this->baseUri =   env('PAYPAL_TEST_MODE') ? 'https://api.sandbox.paypal.com' : 'https://api.paypal.com';

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    protected function getAccessToken()
    {
        $response = $this->client->post('/v1/oauth2/token', [
            'auth' => [$this->clientId, $this->secret],
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    public function sendMoney($recipientEmail, $amount, $currency = 'USD')
    {
        try {
            $accessToken = $this->getAccessToken();

            $response = $this->client->post('/v1/payments/payouts', [
                'headers' => [
                    'Authorization' => "Bearer $accessToken",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'sender_batch_header' => [
                        'email_subject' => 'You have a payment',
                    ],
                    'items' => [
                        [
                            'recipient_type' => 'EMAIL',
                            'amount' => [
                                'value' => $amount,
                                'currency' => $currency,
                            ],
                            'receiver' => $recipientEmail,
                            'note' => 'Thank you for your service!',
                            'sender_item_id' => uniqid(),
                        ],
                    ],
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Check the payout status until it's not pending
            return $this->checkPayoutStatus($data['links'][0]['href'], $accessToken);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                return json_decode($e->getResponse()->getBody()->getContents(), true);
            }
            return [
                'name' => 'GENERAL_ERROR',
                'message' => 'An error occurred while processing the payout.',
            ];
        }
    }

    protected function checkPayoutStatus($url, $accessToken)
    {
        try {
            do {
                $response = $this->client->get($url, [
                    'headers' => [
                        'Authorization' => "Bearer $accessToken",
                        'Content-Type' => 'application/json',
                    ],
                ]);

                $data = json_decode($response->getBody(), true);

                // Log the status and data for debugging purposes
                Log::info('Payout status:', ['status' => $data['batch_header']['batch_status'], 'data' => $data]);

                if ($data['batch_header']['batch_status'] !== 'PENDING') {
                    return $data;
                }

                // Wait for a few seconds before checking again
                sleep(5);

            } while ($data['batch_header']['batch_status'] === 'PENDING');

            return $data;
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                return json_decode($e->getResponse()->getBody()->getContents(), true);
            }
            return [
                'name' => 'GENERAL_ERROR',
                'message' => 'An error occurred while checking the payout status.',
            ];
        }
    }
}
