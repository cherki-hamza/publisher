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

                    <h3 class="text-center mt-3">Tasks In Progress</h3>

                    <!-- menu  -->
                    <!-- menu  -->
                    <div class="d-none d-md-block pt-3 pr-3 pl-3 ml-1 mr-1">

                        <div class="accordion border-x border-top rounded mb-3 mt-3" id="accordionExample">
                            <div class="card shadow-none border-bottom">
                                <div class="card-header bg-primary py-0" id="headingOne">
                                    <button
                                        class="btn btn-link text-decoration-none btn-block py-2 px-0 text-left collapsed"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne" style="outline: none !important; box-shadow: none;">
                                        <svg style="width: 10px;" class="svg-inline--fa fa-caret-right fa-w-6 fa-lg accordion-icon mr-2 text-light"
                                            data-fa-transform="shrink-2" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="caret-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""
                                            style="transform-origin: 0.1875em 0.5em;">
                                            <g transform="translate(96 256)">
                                                <g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)">
                                                    <path fill="currentColor"
                                                        d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                                                        transform="translate(-96 -256)"></path>
                                                </g>
                                            </g>
                                        </svg><!-- <span class="fas fa-caret-right fa-lg accordion-icon mr-2 text-light" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com -->
                                        <span class="font-weight-medium text-light">Please click here to read and
                                            familiarise yourself with things you can and cannot do.</span>
                                    </button>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body pt-2">
                                        <div class="pl-1">
                                            <ul class="list mt-2">
                                                <li class=" mt-2"> Before you start working on a task, make sure you have
                                                    accepted it.</li>
                                                <li class=" mt-2"> Reject the task as soon as you think you cannot complete
                                                    it.</li>
                                                <li class=" mt-2"> The article must not be on the subdomain</li>
                                                <li class=" mt-2"> Don't ask the buyer to approve the task.</li>
                                                <li class=" mt-2"> If the Buyer doesn't approve the task, it will be
                                                    automatically marked as approved after 3 days.</li>
                                                <li class=" mt-2"> If the Buyer request any changes, make sure you fix it
                                                    as soon as possible if not the task may be cancelled by the buyer or
                                                    Pr .</li>
                                                <li class=" mt-2"> Before you deliver the task, make sure that all links
                                                    and target URLs are in place and follow all the instructions.</li>
                                                <li class=" mt-2"> Don't try to renegotiate the price with the Buyer. </li>
                                                <li class=" mt-2"> Don't exchange email, phone numbers or links to any
                                                    sites with the Buyer. </li>
                                                <li class=" mt-2"><strong> We read all messages and we reserve the right to
                                                        suspend or ban your account if you fail any of these rules.
                                                    </strong></li>

                                                <li class=" mt-2"><strong class="text-danger"> As a website Owner:
                                                    </strong> After delivering the task, if the Buyer doesn't approve it,
                                                    it will be automatically marked as complete after 3 days and the funds
                                                    will be <strong>Available For Withdrawal.</strong></li>
                                                <li class=" mt-2"><strong class="text-danger"> As a contributor on a
                                                        website: </strong> After delivering the task, if the Buyer doesn't
                                                    approve it, it will be automatically marked as complete after 3 days and
                                                    the funds will move to your <strong>Balance Awaiting</strong>
                                                    and will be <strong>Available For Withdrawal After 21 Days</strong></li>



                                                <li class=" mt-2"> Payments are made weekly (<strong>Every
                                                        Monday</strong>). Please Make sure to request your payment before
                                                    <strong>Sunday Midnight UK Time</strong>.</li>





                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- menu  -->
                        <div class="d-none d-md-block pt-3 pr-3 pl-3 ml-1 mr-1">
                            <div class="btn-group nav">

                                <a href="{{route('opentasks')}}"
                                    class="btn btn-sm btn-outline-dark d-none d-md-block nav-item nav-link nav-link-fade">Not Started
                                    <span style="font-size: 20px" class="badge badge-danger badge-pill ml-2">0</span>
                                </a>
                                <a href="{{route('task_in_progress')}}"
                                    class="btn btn-sm btn-outline-info d-none d-md-block nav-item nav-link nav-link-faded active">In Progress
                                    <span style="font-size: 20px" class="badge badge-dark badge-pill ml-2">0</span>
                                </a>
                                <a href="{{route('task_pending_approval')}}"
                                    class="btn btn-sm btn-outline-warning d-none d-md-block nav-item nav-link nav-link-faded">Pending Approval
                                    <span style="font-size: 20px" class="badge badge-dark  badge-pill ml-2">0</span>
                                </a>
                                <a href="{{route('task_improvement')}}"
                                    class="btn btn-sm btn-outline-primary d-none d-md-block nav-item nav-link nav-link-faded">Improvement
                                    <span style="font-size: 20px" class="badge badge-dark badge-pill ml-2">0</span>
                                </a>

                                <a href="{{route('task_waiting_approval')}}"
                                    class="btn btn-sm btn-outline-purple d-none d-md-block nav-item nav-link nav-link-faded">Waiting Pr Approve
                                    <span style="font-size: 20px"
                                        class="badge badge-dark badge-pill ml-2">0</span>
                                </a>

                                <a href="{{route('task_completed')}}"
                                    class="btn btn-sm btn-outline-success d-none d-md-block nav-item nav-link nav-link-faded">Completed
                                    <span style="font-size: 20px" class="badge badge-dark badge-pill ml-2">0</span></a>

                                    <a href="{{route('task_rejected')}}"
                                    class="btn btn-sm btn-outline-danger d-none d-xl-block nav-item nav-link nav-link-faded">Rejected
                                    <span style="font-size: 20px" class="badge badge-dark badge-pill ml-2">0</span></a>

                            </div>
                        </div>
                           <!-- menu  -->
                    </div>

                    <div class="card-header border-bottom mb-1 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="" class="nav-link   active"><svg
                                        class="svg-inline--fa fa-tasks fa-w-16" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="tasks" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z">
                                        </path>
                                    </svg><!-- <i class="fas fa-tasks"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-spinner fa-w-16" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="spinner" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
                                        </path>
                                    </svg><!-- <i class="fas fa-spinner"></i> Font Awesome fontawesome.com --></a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-thumbs-up fa-w-16" aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="thumbs-up" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z">
                                        </path>
                                    </svg><!-- <i class="far fa-thumbs-up"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-keyboard fa-w-18" aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="keyboard" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M528 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h480c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm8 336c0 4.411-3.589 8-8 8H48c-4.411 0-8-3.589-8-8V112c0-4.411 3.589-8 8-8h480c4.411 0 8 3.589 8 8v288zM170 270v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm-336 82v-28c0-6.627-5.373-12-12-12H82c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm384 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zM122 188v-28c0-6.627-5.373-12-12-12H82c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm-98 158v-16c0-6.627-5.373-12-12-12H180c-6.627 0-12 5.373-12 12v16c0 6.627 5.373 12 12 12h216c6.627 0 12-5.373 12-12z">
                                        </path>
                                    </svg><!-- <i class="far fa-keyboard"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-hourglass-half fa-w-12" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="hourglass-half" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M360 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24 0 90.965 51.016 167.734 120.842 192C75.016 280.266 24 357.035 24 448c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24 0-90.965-51.016-167.734-120.842-192C308.984 231.734 360 154.965 360 64c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24zm-75.078 384H99.08c17.059-46.797 52.096-80 92.92-80 40.821 0 75.862 33.196 92.922 80zm.019-256H99.078C91.988 108.548 88 86.748 88 64h208c0 22.805-3.987 44.587-11.059 64z">
                                        </path>
                                    </svg><!-- <i class="fas fa-hourglass-half"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true"
                                        focusable="false" data-prefix="far" data-icon="check-circle" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                        </path>
                                    </svg><!-- <i class="far fa-check-circle"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link "><svg
                                        class="svg-inline--fa fa-minus-circle fa-w-16" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="minus-circle" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z">
                                        </path>
                                    </svg><!-- <i class="fas fa-minus-circle"></i> Font Awesome fontawesome.com --></a>
                            </li>
                        </ul>
                    </div>

                    <!--/ menu -->
                    <!--/ menu -->

                    <div class="card-body">
                        <div>
                                <div class="mt-4">
                                    {{-- <h5>No results found.</h5> --}}

                                     {{-- start table --}}
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover datatable">
                                            <thead>
                                                <tr>
                                                    <th>Task ID</th>
                                                    <th>Date </th>
                                                    <th>Target URL</th>
                                                    <th>Post Placement URL</th>
                                                    <th>Anchor Text</th>
                                                    <th>Price</th>
                                                    <th>Messsage</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($tasks as $task)
                                                <tr>
                                                    <td>#{{ $task->id }}</td>
                                                    <td>{{ $task->created_at->format('d M Y') }}</td>
                                                    <td>{{ $task->task_target_url }}</td>
                                                    <td>https://{{ $task->site->site_url }}</td>
                                                    <td> {{ $task->task_anchor_text }} </td>
                                                    <td>{{ $task->task_type() }}</td>
                                                    <td>${{ $task->task_price }} </td>


                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="" class="btn  btn-primary mx-2" ><i class="fa fa-eye mr-2"></i>
                                                                Show The Task Request
                                                            </a>
                                                        </div>
                                                    </td>

                                                </tr>
                                             @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end table --}}
                                    <div class="my-4 ml-4">
                                        {{ $tasks->links() }}
                                    </div>
                                {{-- end pagination --}}
                                </div>

                        </div>
                      </div>

                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
@endsection

@section('js')

@endsection
