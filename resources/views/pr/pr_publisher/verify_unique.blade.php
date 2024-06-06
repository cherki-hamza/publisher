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
                            <li class="breadcrumb-item active">verify/unique</li>
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

                <div class="main-body">
                    <!-- Errors and Success Messages -->

                    <div class="alert alert-danger text-center" role="alert">
                        <i class="mr-2" data-fa-i2svg=""><svg style="width: 15px;" class="svg-inline--fa fa-times-circle fa-w-16 fa-lg"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                </path>
                            </svg></i>
                        Before adding any website to the platform, make sure <strong class="font-weight-bold">the DA and DR
                            are more than 20, and the traffic is at least 500 per month</strong>.
                        <br> We may <strong class="font-weight-bold">suspend your account</strong> if you add a website that
                        doesn't have these requirements
                    </div>


                    <hr>
                    <h4 style="font-weight: 900;font-size: 22px;" class="ml-3 text-primary">Step 1. Add Your Website</h4>


                    <div class="card">

                        @include('pr.layouts.inc.alerts.alert')
                        <div class="card-body">

                            <form action="{{route('website_unique') }}" method="POST">
                                @csrf
                                <span class="font-weight-bold">URL</span>
                                <div class="input-group">
                                    <input type="text" name="url" class="form-control" autocomplete="off"
                                        placeholder="http(s)://www." value="https://">

                                    <div class="input-group-append">
                                        <button class="btn bg-primary text-white" type="submit">Confirm &amp;
                                            Continue</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>


                    <!-- Verify Form -->


                    <!-- End Verify Form -->


                    <!--End Verify Form -->
                </div>


            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')
@endsection
