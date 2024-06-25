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

                {{-- start your status --}}
                <div class="card mb-3 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <span class="ml-2 mt-2"> Your Stats...</span>




                        <span class="ml-auto mr-2 mt-2">
                            <span class="badge badge-light btn-sm" data-html="true"
                                data-content="<strong class='text-facebook'>Total number of Buyers who like your profile</strong>"
                                data-placement="left" data-toggle="popover" data-container="body" data-trigger="hover"
                                data-original-title="" title="">
                                <svg style="width: 20px" class="svg-inline--fa fa-heart fa-w-16 text-warning mr-2"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                    </path>
                                </svg><!-- <i class="fas fa-heart text-warning mr-2"></i> Font Awesome fontawesome.com -->0
                            </span>
                        </span>
                    </div>
                    <hr class="m-2 border-white">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-2 text-center">Websites Approved
                                <br>
                                <span>{{ $websites_approved }}
                                </span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>


                            <div class="col-lg-2 text-center">
                                Completion Rate
                                <br>
                                <span class="badge badge-pill badge-soft-success">New</span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>
                            <div class="col-lg-2 text-center">Tasks Completed
                                <br>
                                <span class="ml-auto font-weight-bold">{{$task_completed}}</span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>
                            <div class="col-lg-2 text-center">Tasks Rejected
                                <br>
                                <span class="ml-auto font-weight-bold">{{$tasks_rejected}}</span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>
                            <div class="col-lg-2 text-center">Tasks in Progress
                                <br>
                                <span class="ml-auto font-weight-bold">{{$tasks_in_progress}}</span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>
                            <div class="col-lg-2 text-center">Tasks Awaiting
                                <br>
                                <span class="ml-auto font-weight-bold">{{$tasks_awaiting}}</span>
                                <hr class="border-dashed my-4 d-lg-none">
                            </div>

                        </div>

                    </div>
                </div>
                {{-- end your status --}}


                {{-- start please click heare accordion --}}
                <div class="accordion border-x border-top rounded mb-3 mt-3" id="accordionExample">
                    <div class="card shadow-none border-bottom">
                        <div class="card-header bg-primary py-0" id="headingOne">
                            <button class="btn btn-link text-decoration-none btn-block py-2 px-0 collapsed text-left"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne" style="outline: none !important; box-shadow: none;">
                                <svg style="width: 20px"
                                    class="svg-inline--fa fa-caret-right fa-w-6 fa-lg accordion-icon mr-2 text-light"
                                    data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;">
                                    <g transform="translate(96 256)">
                                        <g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)">
                                            <path fill="currentColor"
                                                d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                                                transform="translate(-96 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fas fa-caret-right fa-lg accordion-icon mr-2 text-light" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com -->
                                <span class="font-weight-medium text-light">Please click here to read and familiarise
                                    yourself with things you can and cannot do.</span>
                            </button>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body pt-2">
                                <div class="pl-1">
                                    <ul class="list mt-2">
                                        <li class=" mt-2"> Before you start working on a task, make sure you have
                                            accepted it.</li>
                                        <li class=" mt-2"> Reject the task as soon as you think you cannot complete
                                            it.
                                        </li>
                                        <li class=" mt-2"> The article must not be on the subdomain</li>
                                        <li class=" mt-2"> Don't ask the buyer to approve the task.</li>
                                        <li class=" mt-2"> If the Buyer doesn't approve the task, it will be
                                            automatically marked as approved after 3 days.</li>
                                        <li class=" mt-2"> If the Buyer request any changes, make sure you fix it as
                                            soon as possible if not the task may be cancelled by the buyer or <span class="text-danger"> PR Super Admin. </span>
                                        </li>
                                        <li class=" mt-2"> Before you deliver the task, make sure that all links and
                                            target URLs are in place and follow all the instructions.</li>
                                        <li class=" mt-2"> Don't try to renegotiate the price with the Buyer. </li>
                                        <li class=" mt-2"> Don't exchange email, phone numbers or links to any sites
                                            with the Buyer. </li>
                                        <li class=" mt-2"><strong> We read all messages and we reserve the right to
                                                suspend or ban your account if you fail any of these rules. </strong>
                                        </li>

                                        <li class=" mt-2"><strong class="text-danger"> As a website Owner: </strong>
                                            After delivering the task, if the Buyer doesn't approve it,
                                            it will be automatically marked as complete after 3 days and the funds will
                                            be <strong>Available For Withdrawal.</strong></li>
                                        <li class=" mt-2"><strong class="text-danger"> As a contributor on a website:
                                            </strong> After delivering the task, if the Buyer doesn't approve it, it
                                            will be automatically marked as complete after 3 days and the funds will
                                            move to your <strong>Balance Awaiting</strong>
                                            and will be <strong>Available For Withdrawal After 21 Days</strong></li>



                                        <li class=" mt-2"> Payments are made weekly (<strong>Every Monday</strong>).
                                            Please Make sure to request your payment before <strong>Sunday Midnight UK
                                                Time</strong>.</li>





                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end please click heare accordion --}}


                {{-- start add website --}}
                    <div class="d-flex">
                        <span class="text-facebook h5">You can add up to 500 websites to your account
                            <span data-html="true"
                                data-content="If you think your stats are good enough, contact us and we may increase the number of websites you can add to your account"
                                data-placement="right" data-toggle="popover" data-container="body" data-trigger="hover"
                                data-original-title="" title="">
                                <svg style="width: 20px" class="svg-inline--fa fa-info-circle fa-w-16 text-warning"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                    </path>
                                </svg><!-- <i class="fas fa-info-circle text-warning"></i> Font Awesome fontawesome.com -->
                            </span>

                        </span>
                        <a href="{{ route('verify_unique') }}" class="btn bg-primary text-white ml-auto"
                            role="button"><svg style="width: 20px"
                                class="svg-inline--fa fa-plus-circle fa-w-16 fa-lg mr-2" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="plus-circle" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z">
                                </path>
                            </svg><!-- <i class="fas fa-plus-circle fa-lg mr-2"></i> Font Awesome fontawesome.com -->Add
                            New Website</a>
                    </div>
                {{-- end add website --}}


                    <div class="card mt-3">
                        <div class="table-responsive">

                            {{-- start modals --}}
                            <div class="modal fade" id="activateActivityStatus7" tabindex="-1"
                                aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="basicModalLabel">Activate your Activity
                                                Status on this site</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close" style="outline: none !important; box-shadow: none;">
                                                <span aria-hidden="true" class="text-white">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">
                                                You are about to activate your <strong>Activity Status</strong> on <br>
                                                <a href="https://www.fredeo.com" target="_blank"
                                                    class="font-weight-bold">
                                                    https://www.fredeo.com</a><br>


                                            </p>
                                            <div class="card shadow-none">
                                                <div class="card-body">


                                                    <form action="#" method="POST"></form>
                                                    <input type="hidden" name="_token"
                                                        value="KIvSfdStJs4pU8tuoCc4LsiGTw3fibHbwZMW9Xtj">
                                                        <input type="hidden" name="_method" value="PUT">
                                                    <div class="text-center mt-1">

                                                        <input type="hidden" name="performer_activity_status_id"
                                                            value="Activate">
                                                        <div class="input-group shadow-bottom">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Enter Current Password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-icon bg-primary text-white"
                                                                    title="Active" type="submit"><svg
                                                                        style="width: 20px"
                                                                        class="svg-inline--fa fa-check-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="check-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg><!-- <i class="fas fa-check-circle"></i> Font Awesome fontawesome.com -->
                                                                    Activate Now</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="deactivateActivityStatus7" tabindex="-1"
                                aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title text-white" id="basicModalLabel">Deactivate your
                                                Activity Status on this site</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close" style="outline: none !important; box-shadow: none;">
                                                <span aria-hidden="true" class="text-white">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">
                                                You are about to deactivate your Activity Status on <br>
                                                <a href="https://www.fredeo.com" target="_blank"
                                                    class="font-weight-bold">
                                                    https://www.fredeo.com</a>

                                            </p>
                                            <div class="card shadow-none">
                                                <div class="card-body">
                                                    <form action="https://icopify.co/performers/status/959595"
                                                        method="POST" class="d-inline"></form>
                                                    <input type="hidden" name="_token"
                                                        value="KIvSfdStJs4pU8tuoCc4LsiGTw3fibHbwZMW9Xtj"> <input
                                                        type="hidden" name="_method" value="PUT">
                                                    <div class="text-center mt-1">
                                                        <input type="hidden" name="performer_activity_status_id"
                                                            value="Deactivate">
                                                        <div class="input-group shadow-bottom">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Enter Current Password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-icon btn-danger" title="Deactivate"
                                                                    type="submit"><svg style="width: 20px"
                                                                        class="svg-inline--fa fa-pause-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="far" data-icon="pause-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm96-280v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16zm-112 0v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16z">
                                                                        </path>
                                                                    </svg><!-- <i class="far fa-pause-circle"> </i> Font Awesome fontawesome.com -->
                                                                    Deactivate Now</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="activateActivityStatus2933" tabindex="-1"
                                aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="basicModalLabel">Activate your Activity
                                                Status on this site</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close" style="outline: none !important; box-shadow: none;">
                                                <span aria-hidden="true" class="text-white">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">
                                                You are about to activate your <strong>Activity Status</strong> on <br>
                                                <a href="https://www.forbesposts.com" target="_blank"
                                                    class="font-weight-bold">
                                                    https://www.forbesposts.com</a><br>


                                            </p>
                                            <div class="card shadow-none">
                                                <div class="card-body">


                                                    <form action="https://icopify.co/performers/status/959536"
                                                        method="POST"></form>
                                                    <input type="hidden" name="_token"
                                                        value="KIvSfdStJs4pU8tuoCc4LsiGTw3fibHbwZMW9Xtj"> <input
                                                        type="hidden" name="_method" value="PUT">
                                                    <div class="text-center mt-1">

                                                        <input type="hidden" name="performer_activity_status_id"
                                                            value="Activate">
                                                        <div class="input-group shadow-bottom">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Enter Current Password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-icon bg-primary text-white"
                                                                    title="Active" type="submit"><svg
                                                                        style="width: 20px"
                                                                        class="svg-inline--fa fa-check-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="check-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg><!-- <i class="fas fa-check-circle"></i> Font Awesome fontawesome.com -->
                                                                    Activate Now</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="deactivateActivityStatus2933" tabindex="-1"
                                aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title text-white" id="basicModalLabel">Deactivate your
                                                Activity Status on this site</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close" style="outline: none !important; box-shadow: none;">
                                                <span aria-hidden="true" class="text-white">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">
                                                You are about to deactivate your Activity Status on <br>
                                                <a href="https://www.forbesposts.com" target="_blank"
                                                    class="font-weight-bold">
                                                    https://www.forbesposts.com</a>

                                            </p>
                                            <div class="card shadow-none">
                                                <div class="card-body">
                                                    <form action="https://icopify.co/performers/status/959536"
                                                        method="POST" class="d-inline"></form>
                                                    <input type="hidden" name="_token"
                                                        value="KIvSfdStJs4pU8tuoCc4LsiGTw3fibHbwZMW9Xtj"> <input
                                                        type="hidden" name="_method" value="PUT">
                                                    <div class="text-center mt-1">
                                                        <input type="hidden" name="performer_activity_status_id"
                                                            value="Deactivate">
                                                        <div class="input-group shadow-bottom">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Enter Current Password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-icon btn-danger" title="Deactivate"
                                                                    type="submit"><svg style="width: 20px"
                                                                        class="svg-inline--fa fa-pause-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="far" data-icon="pause-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm96-280v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16zm-112 0v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16z">
                                                                        </path>
                                                                    </svg><!-- <i class="far fa-pause-circle"> </i> Font Awesome fontawesome.com -->
                                                                    Deactivate Now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- start Modal delete --}}
                            <div class="modal fade" id="deleteWebsite" tabindex="-1"
                                aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('destroy_site') }}" method="POST">
                                         @csrf
                                         @method('DELETE')
                                         <input type="hidden" name="site_id" id="did">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title text-white" id="basicModalLabel"><svg
                                                    style="width: 20px" class="svg-inline--fa fa-trash-alt fa-w-14"
                                                    aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="trash-alt" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                                    </path>
                                                </svg><!-- <i class="far fa-trash-alt"></i> Font Awesome fontawesome.com -->
                                                Remove <strong class="site_name" id="delete-data"></strong>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close" style="outline: none !important; box-shadow: none;">
                                                <span aria-hidden="true" class="text-white">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card shadow-none">
                                                <div class="card-body m-n3">

                                                    <div class="custom-control custom-checkbox text-center mb-2">
                                                        <span class="">
                                                            Yes, I want to remove <strong
                                                                class="text-danger font-weight-bold" id="delete-data"></strong>
                                                        </span>
                                                        <hr>

                                                        <span class="text-primary">Ps: This site will still be count
                                                            amount the websites you have added but will not been shown on
                                                            your account</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer bg-300">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger">
                                                    <svg style="width: 20px"
                                                        class="svg-inline--fa fa-trash-alt fa-w-14 mr-2"
                                                        aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="trash-alt" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                                        </path>
                                                    </svg><!-- <i class="far fa-trash-alt mr-2"></i> Font Awesome fontawesome.com -->
                                                    <strong>Remove</strong>
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                            </div>
                            {{-- end Modal delete --}}

                            {{-- end modals --}}

                            {{-- start table --}}
                            <table class="table table-sm table-bordered table-hover table-striped fs--1">
                                {{-- start thead --}}
                                <thead class="bg-300">
                                    <tr>

                                        <th scope="col">Website URL</th>

                                        <th style="color: goldenrod;font-size: 25px;" scope="col" class="text-center">
                                            New Tasks
                                            <i class="fa fa-tasks" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col" class="text-center">Activity Status</th>
                                        <th scope="col" class="text-center">Placement</th>
                                        <th scope="col" class="text-center">Creation &amp; Placement</th>
                                        <th scope="col" class="text-center">Link Insertion
                                             <svg style="width: 20px"
                                                class="svg-inline--fa fa-info-circle fa-w-16 text-facebook"
                                                data-html="true" data-content="Only Website Owner are eligible"
                                                data-placement="right" data-toggle="popover" data-container="body"
                                                data-trigger="hover" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="info-circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""
                                                data-original-title="" title="">
                                                <path fill="currentColor"
                                                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                                </path>
                                            </svg>
                                        </th>

                                        <th scope="col" class="text-center d-xl-table-cell d-none">Website Status</th>
                                        <th scope="col" class="text-center">Edit\Delete</th>

                                    </tr>
                                </thead>
                                 {{-- end thead --}}

                                {{-- start body --}}
                                <tbody>

                                    @foreach ($sites as $site)
                                    <tr class="{{ ($site->super_admin_status == '0')? 'bg-warning' :'' }}">
                                        <td class="align-middle"><a href="{{ $site->site_url }}" rel="nofollow"
                                                target="_blank" class="text-decoration-none">
                                                {{ (str_contains($site->site_url, 'https'))? $site->site_url : "https://$site->site_url" }}
                                            </a>

                                        </td>

                                        <td class="text-center align-middle d-xl-table-cell d-none"><span
                                                class="badge badge-pill  badge-soft-success text-center">
                                                <a href="{{ route('site_tasks' , ['user_id' => $site->user_id , 'site_id' => $site->id ] ) }}">

                                                  <span style="font-size: 25px;" class="text-primary">{{  $site->tasks_count_p_status()  ?? '' }} Tasks</span>
                                                </a>
                                            </span>
                                        </td>

                                        <td class="text-center align-middle">
                                            <span class="badge badge-pill badge-soft-success text-center">{!! $site->site_activity_status() !!}</span>
                                        </td>

                                        <td class="text-center align-middle">
                                            <div class="">
                                                ${{ $site->site_c_p_price }}
                                            </div>
                                        </td>

                                        <td class="text-center align-middle">
                                            <div class="">
                                                ${{ $site->site_c_c_p_price }}
                                            </div>
                                        </td>

                                        <td class="text-center align-middle">
                                            <div class="">
                                               {!! $site->link_insertion() !!}
                                            </div>
                                        </td>

                                        <td class="text-center align-middle d-xl-table-cell d-none">

                                            <span class="badge badge-pill badge-soft-success text-center">
                                                {!! $site->publisher_site_status() !!}
                                            </span>

                                        </td>


                                        {{-- start edit and delete --}}
                                        <td class="align-middle">
                                            <div class="text-center">

                                                <a href="https://icopify.co/performers/959595/edit"
                                                    class="btn btn-icon btn-primary btn-sm" data-html="true"
                                                    data-content="Edit the price, Delivery Time, Etc..."
                                                    data-placement="left" data-toggle="popover" data-container="body"
                                                    data-trigger="hover" data-original-title="" title=""><svg
                                                        style="width: 20px" class="svg-inline--fa fa-edit fa-w-18"
                                                        aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z">
                                                        </path>
                                                    </svg><!-- <i class="far fa-edit"></i> Font Awesome fontawesome.com --></a>



                                                <a href="#" role="button" class="btn btn-danger btn-sm ml-1 btn-delete" data-siteid="{{ $site->id }}" data-sitename="{{ $site->site_url }}"
                                                    data-toggle="modal" data-target="#deleteWebsite" data-html="true"
                                                    data-content="Delete <strong class='text-danger font-weight-bold'>{{ $site->site_url }}</strong> from your account"
                                                    data-placement="left" data-container="body" data-trigger="hover">
                                                    <svg style="width: 20px"
                                                        class="svg-inline--fa fa-trash-alt fa-w-14 fs-0"
                                                        aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="trash-alt" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                                        </path>
                                                    </svg><!-- <i class="far fa-trash-alt fs-0"></i> Font Awesome fontawesome.com -->
                                                </a>
                                            </div>
                                        </td>
                                        {{-- end edit and delete --}}

                                        {{-- start Action --}}
                                        {{-- <td class="align-middle">
                                            <div class="text-center">
                                                <form action="https://icopify.co/performers/status/959595" method="POST"
                                                    class="d-inline">
                                                    <input type="hidden" name="_token"
                                                        value="KIvSfdStJs4pU8tuoCc4LsiGTw3fibHbwZMW9Xtj"> <input
                                                        type="hidden" name="_method" value="PUT">
                                                    <div class="text-center mt-1">
                                                        <input type="hidden" name="performer_activity_status_id"
                                                            value="Deactivate">
                                                        <div class="shadow-bottom">
                                                            <button class="btn btn-icon btn-success btn-sm" type="submit"
                                                                data-html="true" data-content="Deactivate this website"
                                                                data-placement="left" data-toggle="popover"
                                                                data-container="body" data-trigger="hover"
                                                                data-original-title="" title=""><svg
                                                                    style="width: 20px"
                                                                    class="svg-inline--fa fa-pause-circle fa-w-16"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="far" data-icon="pause-circle"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm96-280v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16zm-112 0v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16z">
                                                                    </path>
                                                                </svg><!-- <i class="far fa-pause-circle"> </i> Font Awesome fontawesome.com --></button>
                                                        </div>
                                                    </div>
                                                </form>



                                            </div>
                                        </td> --}}
                                         {{-- end Action --}}

                                    </tr>
                                    @endforeach

                                </tbody>
                                {{-- end body --}}
                            </table>
                        </div>
                    </div>
                    <div>

                        {{-- start pagination --}}
                        <ul class="pagination pagination-sm float-right pb-6 pt-3">
                            <li class="page-item">
                               {{ $sites->links() }}
                            </li>
                        </ul>
                        {{-- end pagination --}}
                    </div>


                </div>
                <!-- /Main body -->

            </div>
        </section>
        <!-- /.content -->

        {{-- start  Modal delete --}}
    {{-- <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <p class="modal-text">Are you sure you want to delete it? <b id="delete-data"></b></p>
                        <input type="hidden" name="id" id="did">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- end Modal delete --}}

    </div>
@endsection

@section('js')

<script>
     // start user delete modal
     $(document).on("click", '.btn-delete', function() {
        let id = $(this).attr("data-siteid");
        let name = $(this).attr("data-sitename");
        $("#did").val(id);
        $("#delete-data").html(name);
        $('#modal-delete').modal({backdrop: 'static', keyboard: false, show: true});
      });
      // end user delete modal
</script>
@endsection
