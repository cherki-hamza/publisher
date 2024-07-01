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
                            <li class="breadcrumb-item active">Publishers Balance</li>
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

                                    <span style="float: left" class="text-primary">
                                        Publishers with Tasks & Balance
                                    </span>
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-body table-responsive">
                                        <table style="font-size: 22px;" id="datatable" class="table table-bordered table-hover text-center datatable">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Publisher Name</th>
                                                    <th>Publisher Email</th>
                                                    <th>Tasks Completed</th>
                                                    <th>Tasks Payed</th>
                                                    <th>Publisher Balance To Pay</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($publishers as $publisher)
                                                <tr>
                                                    <td>#{{ $publisher->id }}</td>
                                                    <td>{{ $publisher->name }}</td>
                                                    <td>{{ $publisher->email }}</td>
                                                    <td>{{ \App\Models\Task::on('mysql_main_pr')->where('pr_user_id' , $publisher->id )->where('status',5)->count() }}</td>
                                                    <td>{{ \App\Models\PublisherTaskPayment::on('mysql_main_pr')->where('publisher_id' , $publisher->id )->where('status',1)->count() }}</td>
                                                    <td><span>$</span>{{ ( \App\Models\Task::on('mysql_main_pr')->where('pr_user_id' , $publisher->id )->where('status',5)->whereNotIn('id' , \App\Models\PublisherTaskPayment::on('mysql_main_pr')->where('publisher_id' , $publisher->id)->pluck('task_id'))->sum('task_price'))  }}</td>
                                                    <td>
                                                        <a href="{{ route('publicher_completed_tasks' , ['publisher_id' => $publisher->id ]) }}" class="btn btn-primary"><i class="fas fa-eye mr-2"></i>Show Tasks & Balance</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- pagination --}}
                                  <div style="float: right;font-size: 22px" class="row pagination mr-3 my-3 text-right">
                                    {{ $publishers->links() }}
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
