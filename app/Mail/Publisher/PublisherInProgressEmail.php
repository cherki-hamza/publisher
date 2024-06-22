<?php

namespace App\Mail\Publisher;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PublisherInProgressEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $task)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'In Progress Task Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */ 
    public function content()
    {
        return new Content(
            view: 'mail.publisher.task_in_progress_mail',
            with: [
                'id'  => $this->task->id,
                'name' => $this->task->user->name,
                'email' => $this->task->user->email,
                'task_type' => ($this->task->task_type == 'c_p')? 'Content Placment' : 'Content Creation And Placment',
                'site'  => $this->task->site->site_url,
                'price' => $this->task->order->price,
                'date'   => $this->task->site->site_time
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
