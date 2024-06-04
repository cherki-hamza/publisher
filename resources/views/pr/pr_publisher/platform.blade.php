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
            <div id="content">
                <div id="loading-overlay" style="display: none;">
                    <img src="/img/loading.gif" alt="Loading...">
                </div>

                <!-- Main body -->
                <div class="main-body pt-2">

                    <!-- Errors and Success Messages -->

                    <div class="text-center">
                        <div class="mt-4">
                            <h5 style="color: 344050">You have no website here at the moment...</h5>
                        </div>
                        <div class="ml-auto p-0 m-3"><a href="{{ route('websites_requirements') }}"
                                class="btn bg-primary text-white" role="button">
                                <svg  style="width: 20px;"
                                    class="svg-inline--fa fa-plus-circle fa-w-16 fa-lg mr-2" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="plus-circle" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z">
                                    </path>
                                </svg><!-- <i class="fas fa-plus-circle fa-lg mr-2"></i> Font Awesome fontawesome.com -->Add
                                New Website</a></div>
                    </div>

                    <div>
                        <ul class="pagination pagination-sm float-right pb-6 pt-3">
                            <li class="page-item">

                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /Main body -->






            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')
@endsection
