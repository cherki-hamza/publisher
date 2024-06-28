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
                            <li class="breadcrumb-item active">All Publisher Sites</li>
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

                                    <span style="float: left" class="text-primary text-right">
                                        All Publisher Sites
                                    </span>
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered table-hover text-center datatable">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Task Anchor Text</th>
                                                    <th>Task site Url</th>
                                                    <th>Task Status</th>
                                                    <th>Show</th>
                                                    <th>Super Admin Status</th>
                                                    <th>Action</th>
                                                    <th class="bg-danger">Reset Task</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>#{{ $task->id }}</td>
                                                        <td>{{ $task->task_anchor_text }}</td>

                                                        <td>{{ (str_contains($task->site->site_url, 'https'))? $task->site->site_url : $task->site->site_url }}</td>

                                                        <td class="text-{{ $task->show_status_style() }}">{{ $task->show_status() }}</td>

                                                        <td>
                                                            <a href="{{ route('admin_show_task' , ['task_id'=>$task->id]) }}" class="btn btn-primary"><i class="fas fa-eye mr-2"></i>Show Task</a>
                                                        </td>

                                                        <td>
                                                            @if ($task->admin_status == 2)
                                                              <span style="font-size: 20px" class="badge badge-warning text-white">Waiting</span>
                                                            @elseif ($task->admin_status == 1)
                                                            <span style="font-size: 20px" class="badge badge-success text-white">Approved</span>
                                                            @elseif ($task->admin_status == 0)
                                                              <span style="font-size: 20px" class="badge badge-danger text-white">Rejected</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <div class="row d-flex justify-content-around">
                                                                {{-- if the publisher super admin witing for approve or reject the task --}}
                                                               @if ($task->admin_status == 2 && $task->c_status == 1)
                                                                  <span><a href="{{ route('admin_approve_task' , ['task_id' => $task->id]) }}" class="btn btn-primary"><i class="fa fa-paper-plane mr-2" aria-hidden="true"></i>Approve & Send To Publisher</a></span>
                                                                  <span><a href="{{ route('admin_reject_task' , ['task_id' => $task->id]) }}" class="btn btn-danger"><i class="fa fa-ban mr-2" aria-hidden="true"></i>Reject & send to Client</a></span>
                                                               @endif
                                                               {{-- if the super admin approve the task--}}
                                                               @if ($task->admin_status == 1)
                                                               <span><a onclick="preventDefault();" href="#" class="btn btn-success"><i class="fa fa-paper-plane mr-2" aria-hidden="true"></i>Your Approve the task & Send Email To Publisher</a></span>
                                                               @endif
                                                               {{-- if the super admin reject the task and send email to client to reject the task --}}
                                                               @if ($task->admin_status == 0)
                                                               <span><a onclick="preventDefault();" href="#" class="btn btn-danger"><i class="fa fa-ban mr-2" aria-hidden="true"></i>Your Rejected the task</a></span>
                                                               @endif

                                                            </div>

                                                        </td>

                                                        <td>
                                                            <span><a href="{{ route('admin_reset_task' , ['task_id' => $task->id]) }}" class="btn btn-danger"><i class="fa fa-redo mr-2" aria-hidden="true"></i>Reset Task</a></span>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
