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
                    <h1 class="my-2">All Tasks for website : <span class="text-primary">{{ $site_url ?? ''}}</span></h1>
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
                                            <div class="d-flex justify-content-center">
                                                <div class="row">
                                                    <span class="text-center mx-3">
                                                        <form action="{{ route('publisher_approve_task' , ['task_id' => $task->id ]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-secondary" type="submit"><i class="fa fa-check mr-1 text-success" aria-hidden="true"></i> <span>Approve</span></button>
                                                        </form>

                                                         </a>
                                                       </span>

                                                       <span class="text-danger mx-3">
                                                        <form action="{{ route('publisher_reject_task' , ['task_id' => $task->id ]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-secondary" type="submit">
                                                                 <span><svg class="mr-1" style="width: 20px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="25" viewBox="0 0 48 48">
                                                                    <linearGradient id="GCWVriy4rQhfclYQVzRmda_hRIvjOSQ8I0i_gr1" x1="9.812" x2="38.361" y1="9.812" y2="38.361" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"></stop><stop offset=".443" stop-color="#ee3d4a"></stop><stop offset="1" stop-color="#e52030"></stop></linearGradient><path fill="url(#GCWVriy4rQhfclYQVzRmda_hRIvjOSQ8I0i_gr1)" d="M24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,12.955,35.045,4,24,4z M24,38	c-7.732,0-14-6.268-14-14s6.268-14,14-14s14,6.268,14,14S31.732,38,24,38z"></path><linearGradient id="GCWVriy4rQhfclYQVzRmdb_hRIvjOSQ8I0i_gr2" x1="6.821" x2="41.08" y1="6.321" y2="40.58" gradientTransform="translate(-.146 .354)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"></stop><stop offset=".443" stop-color="#ee3d4a"></stop><stop offset="1" stop-color="#e52030"></stop></linearGradient><polygon fill="url(#GCWVriy4rQhfclYQVzRmdb_hRIvjOSQ8I0i_gr2)" points="13.371,38.871 9.129,34.629 34.629,9.129 38.871,13.371"></polygon>
                                                                    </svg>Reject</span></button>
                                                        </form>
                                                     </span>
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
