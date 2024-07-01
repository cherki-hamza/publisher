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
                            <li class="breadcrumb-item active">Publisher Payments</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div id="content">
                <div id="loading-overlay" style="display: none;">
                    <img src="/img/loading.gif" alt="Loading...">
                </div>

                 {{-- start main --}}
                   <div class="container-fluid">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body table-responsive">
                                <table style="font-size: 22px;" id="datatable" class="table table-bordered table-hover text-center datatable">
                                    <thead class="bg-info">
                                        <tr>
                                            <th>Publisher Name</th>
                                            <th>Task Title</th>
                                            <th>Task Type</th>
                                            <th>Price</th>
                                            <th>Payment Date</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->task->user->name }}</td>
                                                <td>{{ $payment->task->task_anchor_text }}</td>
                                                <td>{{ $payment->task->task_type() }}</td>
                                                <td><span>$</span>{{ $payment->publisher_payment }}</td>
                                                <td>{{$payment->created_at->format('m/d/Y')}} |  {{ $payment->created_at->diffForHumans() }}</td>
                                                <td>Payed</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                         {{-- pagination --}}
                         <div style="float: right;font-size: 22px" class="row pagination mr-3 my-3 text-right">
                            {{ $payments->links() }}
                          </div>
                        {{-- pagination --}}
                    </div>
                   </div>
                 {{-- end main --}}

            </div>
        </section>
        <!-- /.content -->


    </div>
@endsection

@section('js')

@endsection
