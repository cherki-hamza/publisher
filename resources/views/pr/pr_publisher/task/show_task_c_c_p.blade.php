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
            <div class="col-md-12">
                <div class="card">

                    <h3 class="text-center mt-3">Task ID :  #{{ $task->id }} , And Type :  {{ $task->task_type() }}</h3>

                        <div class="card-body">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <div class="mt-n2 mb-n2 d-flex">
                                        <h5 class="text-white"> Task ID #{{$task->id}}</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (!empty($post))
                                    <form action="{{-- {{ route('update_post', ['project_id' => request()->project_id , 'task_id' => request()->task_id , 'post_id' => $post->id ]) }} --}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    @else
                                    <form action="{{-- {{ route('store_post', ['project_id' => request()->project_id , 'task_id' => request()->task_id ]) }} --}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    @endif


                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="bg-primary text-white">Service Type</td>
                                                        <td class="text-primary font-weight-bold">
                                                            {{ $task->task_type == 'c_p' ? 'Content Placement' : 'Content Creation And Placement' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Price</td>
                                                        <td class="text-primary font-weight-bold">${{ $task->order->price }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Task Status</td>
                                                        <td>{{ $task->show_status() }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Link Type</td>
                                                        <td>DoFollow</td>
                                                    </tr>

                                                    {{-- @php
                                                        if (str_contains('How are you', 'are')) {
                                                        echo 'true';
                                                    }
                                                    @endphp --}}

                                                    <tr>
                                                        <td class="bg-primary text-white">Publisher's URL</td>
                                                        <td><a href="{{ str_contains($task->site->site_url, 'https') ? $task->site->site_url : $task->site->site_url }}" target="_blank" rel="nofollow">
                                                            {{ str_contains($task->site->site_url, 'https') ? $task->site->site_url : 'https://'.$task->site->site_url }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Anchor Text</td>
                                                        <td>{{ $task->task_anchor_text }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Target URL</td>
                                                        <td><a href="{{ $task->task_target_url }}"
                                                                target="_blank">{{ $task->task_target_url }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary text-white">Post Placement URL</td>
                                                        <td class="table-success"><a href="#" target="_blank"
                                                                class="font-weight-bold">{{ $post->post_title ?? '' }}</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-primary text-white">Special Requirement</td>
                                                        <td>
                                                            <textarea  class="form-control" rows="6" readonly="">{!! $task->task_special_requirement !!}</textarea>
                                                        </td>
                                                    </tr>

                                                   {{--  @if (!Empty($post) && $post->status == 6)
                                                    <tr>
                                                        <td class="bg-danger text-white">Rejection Reason</td>
                                                        <td>
                                                            <textarea  class="form-control" rows="3" readonly="">This task has been rejected because the client said : {{ $post->post_note }}</textarea>
                                                        </td>
                                                    </tr>
                                                    @endif --}}

                                                </tbody>
                                            </table>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')

@endsection
