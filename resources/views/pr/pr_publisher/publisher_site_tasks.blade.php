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
                            <li class="breadcrumb-item active">My Platform</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="main-body pt-2">


                <div class="card mt-4">
                    <h1 class="my-2">All Tasks for website : <span class="text-primary">{{    ((str_contains($site_url, 'https'))? $site_url : "https://$site_url") ?? '' }}</span></h1>
                    {{-- <h5>No results found.</h5> --}}

                     {{-- start table --}}
                    <div class="card-body table-responsive my-2">
                        <table class="table table-bordered table-hover datatable">
                            <thead class="bg-info">
                                <tr>
                                    <th>Task ID</th>
                                    <th>Date </th>
                                    <th>Target URL</th>
                                    <th>Post Placement URL</th>
                                    <th>Anchor Text</th>
                                    <th>Task Type</th>
                                    <th>Price</th>
                                    <th>Show</th>
                                    <th>Task Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                   @foreach ($tasks as $task)
                                    <tr>
                                        <td>#{{ $task->id }}</td>
                                        <td>{{ $task->created_at->format('d M Y') }}</td>
                                        <td>{{ $task->task_target_url }}</td>
                                        <td>https://{{ $task->site->site_url }}</td>
                                        <td> {{ $task->task_anchor_text }} </td>
                                        <td>{{ $task->task_type() }}</td>
                                        <td>${{ $task->task_price }} </td>


                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('show_task' , ['user_id' => $task->pr_user_id , 'site_id' => $task->site_id , 'task_id' => $task->id]) }}" class="btn  btn-primary mx-2" ><i class="fa fa-eye mr-2"></i>
                                                    Show The Task Request
                                                </a>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                           <span class="btn btn-{{ $task->show_status_style() }}">{{ $task->show_status() }}</span>
                                        </td>

                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <div class="row">

                                                     @if($task->publisher_status == 2)
                                                     <span class="text-center mx-3">
                                                        <form action="{{ route('publisher_approve_task' , ['task_id' => $task->id ]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-secondary" type="submit"><i class="fa fa-check mr-1 text-success" aria-hidden="true"></i> <span>Approve</span></button>
                                                        </form>
                                                      </span>

                                                      <span class="text-danger mx-3">
                                                        <form action="{{ route('publisher_reject_task' , ['task_id' => $task->id ]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-secondary" type="submit">
                                                                 <span>
                                                                    <i class="fa fa-ban text-danger mr-1"></i>
                                                                    Reject</span></button>
                                                        </form>
                                                     </span>
                                                      @endif

                                                      @if($task->publisher_status == 1)
                                                     <span class="text-center mx-3">
                                                         <a href="{{ route('publisher_open_task' , ['task_type' => $task->task_type  , 'task_id' => $task->id]) }}" class="btn btn-success">
                                                            @if ($task->status == 5)
                                                                 Show Task
                                                            @else
                                                              Start The Task
                                                            @endif
                                                         </a>
                                                      </span>


                                                      @endif


                                                      @if($task->publisher_status == 0)
                                                     <span class="text-center mx-3">
                                                        <span class="btn btn-danger">Your Rejected the task</span>
                                                     </span>
                                                      @endif





                                                </div>

                                            </div>
                                           </td>

                                    </tr>
                                 @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{-- end table --}}
                    {{-- start pagination --}}
                        <div class="my-4 ml-4">
                            {{ $tasks->links() }}
                        </div>
                    {{-- end pagination --}}
                </div>

            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')
@endsection
