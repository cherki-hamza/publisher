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
                            <li class="breadcrumb-item active">Publisher Balance</li>
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
                                        <div class="alert alert-primary text-dark" role="alert">
                    <svg style="width: 18px;" class="svg-inline--fa fa-info-circle fa-w-16 fa-lg mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg><!-- <i class="fas fa-info-circle fa-lg mr-2"></i> Font Awesome fontawesome.com -->
                    <span>Payments are made weekly (Every Monday). Please make sure to request your payment before Sunday Midnight UK Time,
                        the minimum amount is <strong>$5.00</strong><br>
                    We will take <span class="font-weight-bold">10%</span> to cover Paypal's Commission fee (<a href="https://www.paypal.com/us/webapps/mpp/merchant-fees" target="_blank" class="text-primary">Learn More Here</a>)
                    and advertising fee. That means the final amount you will see in your Paypal account will differ from the one you see here.<br><br></span>
                        <strong><svg style="width: 18px;" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg><!-- <i class="fas fa-long-arrow-alt-right mr-1"></i> Font Awesome fontawesome.com --> As a website Owner: </strong> After delivering the task, if the Buyer doesn't approve it,
                        it will be automatically marked as completed after 3 days and the funds will be <strong>Available For Withdrawal.</strong> <br><br>
                    {{--<strong><svg style="width: 18px;" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg><!-- <i class="fas fa-long-arrow-alt-right mr-1"></i> Font Awesome fontawesome.com -->
                          As a contributor on a website: </strong> After delivering the task, if the Buyer doesn't approve it, it will be automatically marked as completed after 3 days and the funds will move to your <strong>Balance Awaiting</strong>
                    and it will be <strong>Available For Withdrawal After 21 Days.</strong> --}}
                    </div>



                <h4 class="text-danger text-center mb-3">Pr Team will not refund a payment sent to a wrong Paypal Email</h4>
            <div class="row gutters-sm">

                <!-- NET INCOME -->
                <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>${{ $publisher_balance }}</span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-wallet fa-w-16 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg><!-- <i class="fas fa-wallet mr-2 font-size-lg text-facebook"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h6>Net Income
                                        <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="All that you have earned to date on iCopify. This does not include upcoming earnings" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg>
                                    </h6>
                                </div>
                                <div style="font-size: 22px" class="col-6 text-right">
                                   <a href="{{ route('publisher_payements', ['publisher_id'=>auth()->user()->id]) }}">Show All Payments</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- / NET INCOME -->

                <!-- WITHDRAWN -->
                {{-- <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>$0.00</span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-file-invoice-dollar fa-w-12 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-invoice-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-153 31V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 80v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8zm144 263.88V440c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-24.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V232c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v24.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07z"></path></svg><!-- <i class="fas fa-file-invoice-dollar mr-2 font-size-lg text-facebook"></i> Font Awesome fontawesome.com -->
                            </div>
                            <h6>Withdrawn
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="All the money you withdrew to date" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle" data-content="All the money you withdrew to date" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="">
                                </span> Font Awesome fontawesome.com -->
                            </h6>
                        </div>
                    </div>
                </div> --}}
                <!-- / WITHDRAWN -->

                <!-- Bonus -->



                <!-- / Bonus -->

                <!-- Awaiting -->
                <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>${{ $publisher_balance_waiting }}</span>
                                <a class="" href="#"></a><svg style="width: 18px;" class="svg-inline--fa fa-hourglass-half fa-w-12 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hourglass-half" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M360 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24 0 90.965 51.016 167.734 120.842 192C75.016 280.266 24 357.035 24 448c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24 0-90.965-51.016-167.734-120.842-192C308.984 231.734 360 154.965 360 64c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24zm-75.078 384H99.08c17.059-46.797 52.096-80 92.92-80 40.821 0 75.862 33.196 92.922 80zm.019-256H99.078C91.988 108.548 88 86.748 88 64h208c0 22.805-3.987 44.587-11.059 64z"></path></svg><!-- <i class="fas fa-hourglass-half mr-2 font-size-lg text-facebook"></i> Font Awesome fontawesome.com -->
                            </div>
                            <h6>Balance Awaiting
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="The earning of each task will be automatically transfer to your balance after 21 days" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle" data-content="The earning of each task will be automatically transfer to your balance after 21 days" data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="">
                                </span> Font Awesome fontawesome.com -->
                            </h6>
                        </div>
                    </div>
                </div>

                <!-- / Awaiting -->

                <!-- Reserved -->
                {{-- <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>$0.00</span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-piggy-bank fa-w-18 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="piggy-bank" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z"></path></svg><!-- <i class="fas fa-piggy-bank mr-2 font-size-lg text-facebook"></i> Font Awesome fontawesome.com -->
                            </div>
                            <h6>Reserved
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="The Total amount that have been reserved for incompleted tasks." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle" data-content="The Total amount that have been reserved for incompleted tasks." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="">
                                </span> Font Awesome fontawesome.com -->
                            </h6>
                        </div>
                    </div>
                </div> --}}

                <!-- / Reserved -->

                <!-- AVAILABLE FOR WITHDRAWAL -->
                {{-- <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100 bg-primary text-white">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span class="text-white">
                                                                $0.00
                                                        </span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-coins fa-w-16 mr-2 font-size-lg text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z"></path></svg><!-- <i class="fas fa-coins mr-2 font-size-lg text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <h6 class="text-white">Balance Available For Withdrawal
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="All the earnings that are available for withdrawal." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle" data-content="All the earnings that are available for withdrawal." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="">
                                </span> Font Awesome fontawesome.com -->
                            </h6>
                        </div>
                    </div>
                </div> --}}

                <!-- / AVAILABLE FOR WITHDRAWAL -->

                <!-- PENDING WITHDRAWAL -->
                {{-- <div class="col-sm-6 col-xl-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="h2 d-flex justify-content-between mb-2">
                                <span>$0.00</span>
                                <svg style="width: 18px;" class="svg-inline--fa fa-money-check-alt fa-w-20 mr-2 font-size-lg text-facebook" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="money-check-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z"></path></svg><!-- <i class="fas fa-money-check-alt mr-2 font-size-lg text-facebook"></i> Font Awesome fontawesome.com -->
                            </div>
                            <h6>Pending Withdrawal
                                <svg style="width: 18px;" class="svg-inline--fa fa-question-circle fa-w-16" data-content="The total amount you will get in your Paypal." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle" data-content="The total amount you will get in your Paypal." data-html="true" data-placement="top" data-toggle="popover" data-container="body" data-trigger="hover" data-original-title="" title="">
                                </span> Font Awesome fontawesome.com -->
                            </h6>
                        </div>
                    </div>
                </div> --}}
                <!-- / PENDING WITHDRAWAL -->
                                    <div class="col">

                            <div class="d-flex">
                                                                    </div>
                        </div>
                        </div>


            <!-- Transfer To Your Buyer Balance -->
                <div class="modal fade show" id="transferToYourBuyerBalance" tabindex="-1" aria-labelledby="basicModalLabel" style="display: none; padding-right: 9px;" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h6 class="modal-title text-white" id="basicModalLabel">Transfer Funds To Your Buyer Balance</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none !important; box-shadow: none;">
                                <span aria-hidden="true" class="text-white">×</span>
                            </button>

                        </div>
                        <form action="#" method="POST" class="d-inline" onsubmit="this.querySelectorAll('[type=submit]').forEach(b => b.disabled = true)">
                            <input type="hidden" name="_token" value="9V6BWKS79ofv2VhXK48ocoohaXzE8XbRXTN6yqWT">                <input type="hidden" name="_method" value="PUT">                <div class="m-3">
                                <label for="cat">Amount you would like to transfer</label>
                                <input class="form-control" type="number" name="transferFunds" step="0.01" min="0.01" max="0.00" value="0.00" required="">
                            </div>

                            <div class="custom-control custom-checkbox m-3">
                                <input type="checkbox" class="custom-control-input" id="cat2" required="">
                                <label class="custom-control-label" for="cat2">I confirm that I am not making a withdrawal request</label>
                            </div>

                            <div class="modal-footer">
                                <div class="m-auto d-inline-flex">
                                    <button type="button" class="btn btn-outline-secondary mr-1" data-dismiss="modal">Cancel &amp; Return</button>
                                    <button type="submit" class="btn btn-outline-facebook float-right ml-1">Transfer Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Transfer To Your Buyer Balance -->

            <!-- Withdraw Funds -->
            <div class="modal fade show" id="withdrawFunds" tabindex="-1" aria-labelledby="basicModalLabel" style="display: none; padding-right: 9px;" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h6 class="modal-title text-white" id="basicModalLabel">Withdraw Fund</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none !important; box-shadow: none;">
                                <span aria-hidden="true" class="text-white">×</span>
                            </button>

                        </div>
                                        <form action="#" method="POST" class="d-inline" onsubmit="this.querySelectorAll('[type=submit]').forEach(b => b.disabled = true)">
                                <input type="hidden" name="_token" value="9V6BWKS79ofv2VhXK48ocoohaXzE8XbRXTN6yqWT">                    <input type="hidden" name="_method" value="PUT">                    <div class="m-3">
                                    <label for="cat">Amount you would like to withdraw</label>
                                    <input class="form-control" type="number" name="withdrawFunds" step="0.01" min="0.01" max="0.00" value="0.00" required="">
                                </div>

                                <div class="custom-control custom-checkbox m-3">
                                    <input type="checkbox" class="custom-control-input" id="cat" required="">
                                    <label class="custom-control-label" for="cat">I confirm that this Paypal Email: <strong class="text-warning">rockers@gmail.com</strong> is accurate and working properly</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-3 mt-n2">
                                    <input type="checkbox" class="custom-control-input" id="be_aware" required="">
                                    <label class="custom-control-label text-danger" for="be_aware">I aware that iCopify will not refund any payment send to this Paypal Email: rockers@gmail.com</label>
                                </div>

                                <div class="modal-footer">
                                    <div class="m-auto d-inline-flex">
                                        <button type="button" class="btn btn-outline-secondary mr-1" data-dismiss="modal">Cancel &amp; Return</button>
                                        <button type="submit" class="btn bg-primary text-white float-right ml-1">Request Withdrawal</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                </div>
            </div>
            <!-- / Withdraw Funds -->

            <!-- Cancel Withdraw Funds -->
            <div class="modal fade show" id="cancelWithdrawFunds" tabindex="-1" aria-labelledby="basicModalLabel" style="display: none; padding-right: 9px;" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title text-white" id="basicModalLabel">Cancel The Withdraw Of My Funds</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none !important; box-shadow: none;">
                                <span aria-hidden="true" class="text-white">×</span>
                            </button>

                        </div>
                            <form action="#" method="POST" class="d-inline" onsubmit="this.querySelectorAll('[type=submit]').forEach(b => b.disabled = true)">
                                <input type="hidden" name="_token" value="9V6BWKS79ofv2VhXK48ocoohaXzE8XbRXTN6yqWT">                    <input type="hidden" name="_method" value="PUT">

                                    <p class="text-center mt-3">These funds will be returned to your available balance for withdrawal</p>

                                <h3 class="text-facebook text-center font-weight-bold">$0.00</h3>



                                <div class="custom-control custom-checkbox text-center ml-3 mt-2 mb-2">
                                    <input type="checkbox" class="custom-control-input" id="cancel_withdraw" required="">
                                    <label class="custom-control-label text-danger" for="cancel_withdraw">I confirm that I would like to cancel the withdrawal</label>
                                </div>


                                <div class="modal-footer">
                                    <div class="m-auto d-inline-flex">
                                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Return</button>
                                        <button type="submit" class="btn bg-danger text-white float-right ml-1">Cancel The Withdrawal</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            <!-- / Cancel Withdraw Funds -->


            <!-- Withdraw Table -->
            <!-- / Withdraw Table -->


                                <!-- / Publisher & Writer Balance -->

                    <!-- Affiliate Balance -->
                                <!-- / Affiliate Balance -->


                    <!-- Publisher & Writer Balance -->
                            <!-- / Publisher & Writer Balance -->





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
