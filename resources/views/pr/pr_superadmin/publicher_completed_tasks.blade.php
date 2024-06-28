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
                            <li class="breadcrumb-item active">Publisher Tasks</li>
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
                                <div class="d-flex justify-content-between">

                                    <h3 class="card-title">

                                        <span style="" class="text-primary">
                                            Publisher Tasks
                                        </span>
                                    </h3>


                                      @if ($payment_count == 0)
                                        <span style="font-size: 18px;" class="alert alert-warning">No Payment For This Publisher</span>
                                      @else
                                      <span style="font-size: 22px;" class="text-primary">
                                        Payment To Send  :

                                          <a href="{{ route('get_payements', ['publisher_id' => $publisher->id]) }}" style="font-size: 22px;" class="btn btn-warning">
                                            <i class="fa fa-paper-plane mr-2"></i> Pay :  ${{ $payment_count }}
                                         </a>
                                      </span>
                                      @endif


                                </div>



                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-body table-responsive">
                                        <table style="font-size: 22px;" id="datatable" class="table table-bordered table-hover text-center datatable">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th>Publisher Name</th>
                                                    <th>Publisher Url</th>
                                                    <th>Tasks Type</th>
                                                    <th>Task Status</th>
                                                    <th>Price</th>
                                                    <th>Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>{{ $task->publisher_name($task->pr_user_id) }}</td>
                                                        <td>{{ $task->site->site_url }}</td>
                                                        <td>{{ $task->task_type() }}</td>
                                                        <td>{{ $task->show_status() }}{{-- {{  \App\Models\Task::on('mysql_main_pr')->where('pr_user_id' , $publisher->id )->where('status',5)->sum('task_price') }} --}}</td>
                                                        <td><span>$</span>{{ $task->task_price }}</td>
                                                        <td>
                                                           <span class="alert alert-info">Payment Waiting</span>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                 {{-- pagination --}}
                                 <div style="float: right;font-size: 22px" class="row pagination mr-3 my-3 text-right">
                                    {{ $tasks->links() }}
                                  </div>
                                {{-- pagination --}}
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
