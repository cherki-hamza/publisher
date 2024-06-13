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

                    <h3 class="text-center mt-3">Task ID #{{ $task->id }}  {{ $task->task_type }}</h3>

                        <div class="card-body">
                            <h1>{{ $task->task_anchor_text }}</h1>
                            <span>task info for content placement</span>
                        </div>
                    </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')

@endsection
