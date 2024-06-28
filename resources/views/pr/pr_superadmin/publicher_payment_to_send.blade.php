@extends('pr.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Dashboard <x-iconic-phone  style="width: 50px"/></h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Publisher Payement To Send</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">

                                    <span class="text-primary">
                                        Publisher Payment To Send
                                    </span>
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            Invoice
                                            <strong>{{ now()->format('m/d/Y') }}</strong>
                                            <span class="float-right"> <strong>Status:</strong> <span class="text-success"> Success </span></span>

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
                                                                <td class="right">
                                                                   {{-- start butthon send --}}
                                                                        <div class="btn_send my-3">
                                                                            <a style="width: 200px" href="{{ route('send_payements', ['publisher_id' => $publisher->id]) }}" class="btn btn-success">Pay</a>
                                                                        </div>
                                                                    {{-- end butthon send --}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')
@endsection
