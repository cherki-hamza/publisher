@extends('pr.layouts.master')

@section('style')
   <style>
    .alert-primary {
    color: #174077;
    background-color: #d5e5fa;
    border-color: #c4daf8;
    }
    .loader {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 83%; /* Full height of the parent div */
      position: absolute;
      width: 100%;
      top: 0x;
      left: 0;
      z-index: 1; /* Ensure it is above the content */
      background-color: white;
    }

    /* Initially hide the content */
    .content{
      display: none;
    }
   </style>
@endsection

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
                            <li class="breadcrumb-item active">Super Admin Balance</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="loader">
            <img src="{{ asset('public/assets/images/loading.gif') }}" alt="Loading...">
         </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="main-body pt-2">


                    <!-- Errors and Success Messages -->

                        <!-- / Errors and Success Messages -->

                    <!-- /Report Activities -->



                    <!-- Buyer Balance -->
                                <!-- / Buyer Balance -->

                    <!-- Publisher & Writer Balance -->

                    <div class="row gutters-sm">

                <!-- NET INCOME -->
                <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>${{ \App\Models\Payment::on('mysql_main_pr')->sum('amount') }}</span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-wallet fa-w-16 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path>
                                </svg>
                            </div>
                            <h6>Main Balance
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="All that you have earned to date on iCopify. This does not include upcoming earnings" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                </svg>

                            </h6>
                        </div>
                    </div>
                </div>
                <!-- / NET INCOME -->

                <!-- Awaiting -->
                <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>${{ \App\Models\Task::on('mysql_main_pr')->where('status',5)->sum('task_price') ?? 0 }}</span>
                                <a class="" href="#"></a>
                                <svg style="width: 18px;" class="svg-inline--fa fa-wallet fa-w-16 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path>
                                </svg>
                            </div>
                            <h6>Balance For Tasks Completed
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="All that you have earned to date on iCopify. This does not include upcoming earnings" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                </svg>
                            </h6>
                        </div>
                    </div>
                </div>


                                    <div class="col">

                            <div class="d-flex">
                                                                    </div>
                        </div>
                        </div>


                    </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
<script>
    // Function to hide loader and show content
    function showContent() {
      document.querySelector('.loader').style.display = 'none';
      document.querySelector('.content').style.display = 'block';
    }

    // Simulate content loading
    window.addEventListener('load', () => {
      setTimeout(showContent, 2000); // Change 2000 to the desired delay in milliseconds
    });
  </script>
@endsection
