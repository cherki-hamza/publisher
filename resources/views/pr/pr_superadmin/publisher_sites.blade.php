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
                            <li class="breadcrumb-item active">All Client Sites with tasks</li>
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

                                    <span style="float: left" class="text-success text-right">
                                        All Client Sites with tasks
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
                                                    <th>Site Url</th>
                                                    <th>Role</th>
                                                    <th>site and Tasks</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sites as $site)
                                                    <tr>
                                                        <td>#{{ $site->id }}</td>
                                                        <td>{{ (str_contains($site->site_url, 'https'))? $site->site_url : "https://$site->site_url" }}</td>
                                                        <td>{{ \App\Models\User::where('id', $site->pr_user_id)->first()->role }}</td>

                                                        <td>{{ $site->tasks->count() }}</td>

                                                        <td>
                                                            <a href="{{ route('publisher_site_tasks' , ['user_id' => $site->pr_user_id , 'site_id'=>$site->id ]) }}" class="btn btn-primary"><i class="fas fa-eye mr-2"></i>Show  Tasks</a>
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
