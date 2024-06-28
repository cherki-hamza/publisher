<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Send Money To Publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="">
    <span class="preheader">
        Hello From Pr Team, Your financial dues have been sent
    </span>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>{{ now()->format('m/d/Y') }}</strong>
                <span class="float-right"> <strong>Status:</strong> <span class="text-warning"> Pending </span></span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From Pr Team:</h6>
                        <div>
                            <strong>Pr Team</strong>
                        </div>
                        <div>Sunset Mall Emirate, 2 floor, N 64 </div>
                        <div>Email: info@pr.ae</div>
                        <div>Phone: +971 77 888 88</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To Publisher:</h6>
                        <div>
                            <strong>{{ $publisher->name ?? '' }}</strong>
                        </div>
                        <div></div>
                        <div>Email: {{ $publisher->email ?? '' }}</div>
                        <div>Phone: +48 123 456 789</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Task Type</th>
                                <th>Publisher Site</th>

                                <th class="right">Task Price</th>
                                <th class="center"></th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td class="center">{{ $task->id }}</td>
                                <td class="left strong">{{ $task->task_type() }}</td>
                                <td class="left">https://{{ $task->site->site_url }}</td>

                                <td class="right">${{ $task->task_price }}</td>
                                <td class="center"></td>
                                <td class="right">${{ $task->task_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <div>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td style="" class="right">${{ $payment_count }}</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Paypal VAT (10%)</strong>
                                    </td>
                                    <td class="right">${{ ($payment_count*10/100) }}</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>$ {{ $payment_count  -  ($payment_count*10/100) }}</strong>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="left mx-3">
                                        <strong></strong>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </div>


                </div>

            </div>

        </div>
    </div>

  </body>
</html>
