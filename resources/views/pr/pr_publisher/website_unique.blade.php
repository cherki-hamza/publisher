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
                            <li class="breadcrumb-item active">Website unique</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div id="content">

                <div id="content">
                    <div id="loading-overlay" style="display: none;">
                        <img src="/img/loading.gif" alt="Loading...">
                    </div>

                    <div class="main-body">
                        <!-- Errors and Success Messages -->
                        <!-- / Errors and Success Messages -->
                        <span style="height: 60px;"> <h3>Your Website URL:  <a href="{{ session()->get('user_url') }}" rel="nofollow" target="_blank">{{ session()->get('user_url') }}</a></h3>

                        </span>



                        <!-- Order Form -->
                        <div class="card my-2">
                            <div class="card-header bg-primary">
                                <h4 class="text-white">Step2. Add your website info</h4>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    @include('pr.layouts.inc.alerts.alert')
                                </div>
                                <form action="{{ route('store_site') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="site_url" value="{{ session()->get('user_url') }}">

                                    {{-- start 1 --}}
                                    <div class="form-group row gutters">

                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block"><strong>Link Type</strong><span
                                                    class="text-warning">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold">
                                                        <svg style="width: 16px;"
                                                            class="svg-inline--fa fa-link fa-w-16" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="link"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-link"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <select name="site_dofollow" class="custom-select">
                                                    <option selected value="NoFollow">NoFollow</option>
                                                    <option value="DoFollow">DoFollow</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Max links allowed </strong><span
                                                    class="text-warning">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 16px;"
                                                            class="svg-inline--fa fa-link fa-w-16" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="link"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-link"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="site_link_allow" class="form-control"
                                                    placeholder="1" value="1" min="1" max="3"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Words Limit for an article</strong><span
                                                    class="text-warning">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 16px;"
                                                            class="svg-inline--fa fa-file-word fa-w-12" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="file-word"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm57.1 120H305c7.7 0 13.4 7.1 11.7 14.7l-38 168c-1.2 5.5-6.1 9.3-11.7 9.3h-38c-5.5 0-10.3-3.8-11.6-9.1-25.8-103.5-20.8-81.2-25.6-110.5h-.5c-1.1 14.3-2.4 17.4-25.6 110.5-1.3 5.3-6.1 9.1-11.6 9.1H117c-5.6 0-10.5-3.9-11.7-9.4l-37.8-168c-1.7-7.5 4-14.6 11.7-14.6h24.5c5.7 0 10.7 4 11.8 9.7 15.6 78 20.1 109.5 21 122.2 1.6-10.2 7.3-32.7 29.4-122.7 1.3-5.4 6.1-9.1 11.7-9.1h29.1c5.6 0 10.4 3.8 11.7 9.2 24 100.4 28.8 124 29.6 129.4-.2-11.2-2.6-17.8 21.6-129.2 1-5.6 5.9-9.5 11.5-9.5zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-word"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="word_limite" class="form-control"
                                                    placeholder="250" max="5000" min="250"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end 1 --}}

                                    <div class="form-group row gutters">
                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Content Placement Price </strong><span
                                                    class="text-warning">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-dollar-sign fa-w-9"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="dollar-sign" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-dollar-sign"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="site_c_p_price" class="form-control" required="">
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Content Creation &amp; Placement Price
                                                </strong>
                                                <svg style="width: 16px;" class="svg-inline--fa fa-info-circle fa-w-16 text-warning"
                                                    data-html="true"
                                                    data-content="
                                                    If you write content, the <strong class='text-dark'>Content Creation &amp; Placement Price</strong> must
                                                    be higher than the <strong class='text-dark'>Content Placement Price</strong>
                                                    "
                                                    data-placement="right" data-toggle="popover" data-container="body"
                                                    data-trigger="hover" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="info-circle" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="" data-original-title="" title="">
                                                    <path fill="currentColor"
                                                        d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                                    </path>
                                                </svg><!-- <span class="fas fa-info-circle text-warning" data-html="true" data-content="
                                                    If you write content, the <strong class='text-dark'>Content Creation &amp; Placement Price</strong> must
                                                    be higher than the <strong class='text-dark'>Content Placement Price</strong>
                                                    " data-placement="right" data-toggle="popover" data-container="body" data-trigger="hover">
                                                </span> Font Awesome fontawesome.com -->
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px"
                                                            class="svg-inline--fa fa-dollar-sign fa-w-9"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="dollar-sign" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-dollar-sign"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="site_c_c_p_price" class="form-control"
                                                    placeholder="Leave this empty if you don't write content">
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Delivery Time</strong><span
                                                    class="text-warning">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px"
                                                            class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="clock"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-clock"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="text" name="site_time" class="form-control"
                                                    placeholder="Example 1 day , 3 days , 5 days Or 1 day To 3 days  1 Week .." required="">
                                            </div>
                                        </div>

                                    </div>

                                    {{-- start 2 --}}
                                    <div class="form-group row gutters">
                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block "><strong>Site Category</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="text" name="site_category" class="form-control"
                                                    placeholder="Example: All ,  category1 , categor2 .." value="All"
                                                    required="">
                                            </div>

                                        </div>

                                        <div class="col-xl-4 col-md-12">

                                            <label class="d-block @error('site_monthly_traffic') invalid-feedback  @enderror"><strong>Website Monthly Trafic</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="text" name="site_monthly_traffic" class="form-control  @error('site_monthly_traffic') is-invalid  @enderror">


                                            </div>
                                            @error('site_monthly_traffic')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-4 col-md-12">

                                            <label class="d-block "><strong>Website Languages</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold">
                                                        <svg style="width: 18px;" class="svg-inline--fa fa-flag fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="text" name="site_language" class="form-control" value="English"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end 2 --}}

                                    {{-- start 3 --}}
                                    <div class="form-group row gutters">
                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block @error('site_domain_authority') invalid-feedback  @enderror"><strong>Site Domain Authority <span class="text-danger">(DA)</span></strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="site_domain_authority" class="form-control @error('site_domain_authority') is-invalid  @enderror"
                                                    >
                                            </div>

                                        </div>

                                        <div class="col-xl-4 col-md-12">

                                            <label class="d-block @error('site_domain_rating') invalid-feedback  @enderror"><strong>Site Domain Rating <span class="text-danger">(DR)</span></strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="number" name="site_domain_rating" class="form-control @error('site_domain_rating') is-invalid  @enderror" >
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12">

                                            <label class="d-block @error('spam_score') invalid-feedback  @enderror"><strong>Site Spam Score</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <input type="text" name="spam_score" class="form-control @error('spam_score') is-invalid  @enderror"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end 3 --}}


                                    {{-- start 4 --}}
                                    <div class="form-group row gutters">
                                        <div class="col-xl-4 col-md-12">
                                            <label class="d-block @error('site_sposored') invalid-feedback  @enderror"><strong>Site Sposored</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <select name="site_sposored" class="custom-select @error('site_sposored') is-invalid  @enderror">
                                                    <option selected value="No">No Sponsor</option>
                                                    <option value="Yes">Yes Sponsored</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-xl-4 col-md-12">

                                            <label class="d-block "><strong>Site Indexed</strong>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text font-weight-bold"><svg style="width: 12px;"
                                                            class="svg-inline--fa fa-external-link-alt fa-w-16"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="external-link-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com --></span>
                                                </div>
                                                <select name="site_indexed" class="custom-select">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- end 4 --}}


                                    {{-- start 5 requirements --}}
                                    <div class="form-group row gutters">

                                        <div class="col-xl-12  col-md-12">
                                            <label for="textarea" class="d-block "><strong>Special requirements</strong>
                                                <textarea id="textarea" name="special_requirement" class="mt-2 form-control " rows="5" maxlength="800"
                                                    required=""></textarea>
                                                <small id="charCount" class="form-text text-muted">800 characters
                                                    remaining</small>
                                                <small id="charLimitAlert"
                                                    class="form-text text-danger char-limit-alert">You have reached the
                                                    character limit.</small>
                                            </label>

                                        </div>
                                    </div>
                                    {{-- end 5 requirements --}}


                                    <div class="row no-gutters float-right">

                                        <div>
                                            <p class="text-danger"> Submit and allow us up to 48 Hours to review <span class="text-success">(we send email after review)</span> </p>
                                            <button class="btn bg-primary text-white float-right" type="submit"><svg style="width: 16px;"
                                                    class="svg-inline--fa fa-share-square fa-w-18 mr-2" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="share-square"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M568.482 177.448L424.479 313.433C409.3 327.768 384 317.14 384 295.985v-71.963c-144.575.97-205.566 35.113-164.775 171.353 4.483 14.973-12.846 26.567-25.006 17.33C155.252 383.105 120 326.488 120 269.339c0-143.937 117.599-172.5 264-173.312V24.012c0-21.174 25.317-31.768 40.479-17.448l144.003 135.988c10.02 9.463 10.028 25.425 0 34.896zM384 379.128V448H64V128h50.916a11.99 11.99 0 0 0 8.648-3.693c14.953-15.568 32.237-27.89 51.014-37.676C185.708 80.83 181.584 64 169.033 64H48C21.49 64 0 85.49 0 112v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48v-88.806c0-8.288-8.197-14.066-16.011-11.302a71.83 71.83 0 0 1-34.189 3.377c-7.27-1.046-13.8 4.514-13.8 11.859z">
                                                    </path>
                                                </svg><!-- <i class="fas fa-share-square mr-2"></i> Font Awesome fontawesome.com -->Submit
                                                Website</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- End Order Form -->

                    </div>

                </div>


            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')

<script>
    
</script>
@endsection
