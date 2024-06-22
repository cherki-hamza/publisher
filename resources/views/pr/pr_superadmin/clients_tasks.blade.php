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
                            <li class="breadcrumb-item active">All Client Tasks</li>
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
                                        All Client Tasks
                                    </span>
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered table-hover text-center datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>site and Tasks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $i)
                                                @php
                                                    if ($i->role === 'super-admin'){
                                                        continue;
                                                    }
                                                @endphp
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $i->name }}</td>
                                                        <td>{{ $i->email }}</td>
                                                        <td>{{ implode(",", $i->getRoleNames()->toArray()) }}</td>

                                                        <td>
                                                            <a href="{{ route('publisher_sites' , ['user_id'=>$i->id]) }}" class="btn btn-primary"><i class="fas fa-eye mr-2"></i>Show Sites With Tasks</a>
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
