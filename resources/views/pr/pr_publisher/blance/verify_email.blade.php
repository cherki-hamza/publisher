@extends('pr.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Verify Email</li>
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

                 {{-- start main --}}
                   <div class="container d-flex justify-content-center">
                      <div style="width:900px" class="card">
                          <div class="card-header">
                            <h1>Hello {{ auth()->user()->name }} , you need to verify your Paypal Email for show your Balance </h1>
                          </div>
                          <div class="card-body">
                            @if (empty($publisher->verification_code) && empty($publisher->paypal_email))

                              <form action="{{ route('store_paypal_email') }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="">Verify Your Paypal Email <span class="text-danger"> (Enter Your Real Paypal Account)</span></label>
                                    <input type="text" class="form-control" name="email_verify" placeholder="Enter Your Paypal Email">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-primary btn-sm" value="Save Email">
                                </div>
                            </form>

                            @else

                              <form action="{{ route('publisher_verify_code') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="code">Code Verification</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter code">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-info btn-sm" value="Verify Code">
                                </div>
                            </form>

                            @endif


                          </div>
                      </div>

                     </div>
                 {{-- end main --}}

            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')

@endsection
