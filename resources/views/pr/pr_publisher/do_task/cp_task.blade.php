@extends('pr.layouts.master')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ckeditor5-full-screen@0.0.2/theme/fullscreen.min.css">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-4"><span  style="font-size: 25px;" class="alert alert-primary">Task ID #{{ $task->id }}</span></div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            @if ($task->status == 6)
                                 <span style="font-size: 25px;" class="alert alert-danger">This Task is Rejected</span>

                            @elseif($task->status == 5)
                              <span style="font-size: 25px;" class="alert alert-success">Task is Complteted</span>
                           @elseif($task->status == 1)
                           <span style="font-size: 25px;" class="alert alert-info">This Task is In Progress</span>
                            @else

                            @endif
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">task</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <div class="mt-n2 mb-n2 d-flex">
                                    <h5 class="align-middle text-white">Task :</h5>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('publisher_handele_task', [ 'task_type' => $task->task_type,'task_id' => request()->task_id ]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf



                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="bg-primary text-white">Service Type</td>
                                                    <td class="text-primary font-weight-bold">
                                                        {{ $task->task_type == 'c_p' ? 'Content Placement' : 'Content Creation And Placement' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Price</td>
                                                    <td class="text-primary font-weight-bold">${{ $task->order->price }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Task Status</td>
                                                    <td>{{ $task->show_status() }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Link Type</td>
                                                    <td>DoFollow</td>
                                                </tr>

                                                {{-- @php
                                                    if (str_contains('How are you', 'are')) {
                                                    echo 'true';
                                                }
                                                @endphp --}}

                                                <tr>
                                                    <td class="bg-primary text-white">Publisher's URL</td>
                                                    <td><a href="{{ str_contains($task->site->site_url, 'https') ? $task->site->site_url : $task->site->site_url }}" target="_blank" rel="nofollow">
                                                        {{ str_contains($task->site->site_url, 'https') ? $task->site->site_url : 'https://'.$task->site->site_url }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Anchor Text</td>
                                                    <td>{{ $task->task_anchor_text }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Target URL</td>
                                                    <td><a href="{{ $task->task_target_url }}"
                                                            target="_blank">{{ $task->task_target_url }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">Post Placement URL</td>
                                                    <td class="table-success"><a href="{{ ( empty($task->task_post_placement_url)) ? 'https://'.$task->site->site_url.'/'.Str::slug($task->task_anchor_text) :  $task->task_post_placement_url }}" target="_blank"
                                                            class="font-weight-bold">{{ ( empty($task->task_post_placement_url)) ? 'https://'.$task->site->site_url.'/'.Str::slug($task->task_anchor_text) :  $task->task_post_placement_url }}</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="bg-primary text-white">Special Requirement</td>
                                                    <td>
                                                        <textarea  class="form-control" rows="6" readonly="">{!! $task->task_special_requirement !!}</textarea>
                                                    </td>
                                                </tr>

                                                @if (!Empty($post) && $post->status == 6)
                                                <tr>
                                                    <td class="bg-danger text-white">Rejection Reason</td>
                                                    <td>
                                                        <textarea  class="form-control" rows="3" readonly="">This task has been rejected because the client said : {{ $post->post_note }}</textarea>
                                                    </td>
                                                </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>


                            </div>
                        </div>


                       {{-- start c_p --}}
                        <div class="">
                            <div class="mt-3">
                                <div class="card ">
                                    <div class="card-header bg-primary">
                                        <h6 class="text-white mt-n2 mb-n2"> Content to be published  </h6>
                                    </div>

                                    <div class="my-2 px-5">
                                        <label class="text-primary" for="post_placement_url">Post Placement URL:</label>
                                        <input  style="color: red;" value="{{ ( empty($task->task_post_placement_url)) ? 'https://'.$task->site->site_url.'/'.Str::slug($task->task_anchor_text) :  $task->task_post_placement_url }}" type="text" class="form-control" name="post_placement_url" id="post_placement_url">
                                    </div>

                                    <div class="my-2 px-5">
                                        <label class="text-primary" for="post_editor_data">Post Content :	</label>
                                        <textarea {{-- readonly --}}  class="my-3" rows="60" name="post_editor_data">{!! $task->task_editor_data ?? '' !!}</textarea>
                                      </div>


                                </div>
                            </div>


                            <div class="text-center">
                               @if ($task->status == 6)
                                    <span class="btn btn-danger">This Task is Rejected</span>

                               @elseif($task->status == 5)
                                 <span class="btn btn-success">Task is Complteted</span>
                              @elseif($task->status == 1)
                                 <span class="btn btn-info"><i class="fas fa-spinner mr-2"></i>This Task is In Progress</span>
                                 <button style="font-size: 18px"  type="submit" name="action" value="update_task_url"  class="btn btn-primary mx-5">
                                    <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M256 96c38.4 0 73.7 13.5 101.3 36.1l-32.6 32.6c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H448c8.8 0 16-7.2 16-16V64c0-6.5-3.9-12.3-9.9-14.8s-12.9-1.1-17.4 3.5l-34 34C363.4 52.6 312.1 32 256 32c-10.9 0-21.5 .8-32 2.3V99.2c10.3-2.1 21-3.2 32-3.2zM132.1 154.7l32.6 32.6c4.6 4.6 11.5 5.9 17.4 3.5s9.9-8.3 9.9-14.8V64c0-8.8-7.2-16-16-16H64c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l34 34C52.6 148.6 32 199.9 32 256c0 10.9 .8 21.5 2.3 32H99.2c-2.1-10.3-3.2-21-3.2-32c0-38.4 13.5-73.7 36.1-101.3zM477.7 224H412.8c2.1 10.3 3.2 21 3.2 32c0 38.4-13.5 73.7-36.1 101.3l-32.6-32.6c-4.6-4.6-11.5-5.9-17.4-3.5s-9.9 8.3-9.9 14.8V448c0 8.8 7.2 16 16 16H448c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-34-34C459.4 363.4 480 312.1 480 256c0-10.9-.8-21.5-2.3-32zM256 416c-38.4 0-73.7-13.5-101.3-36.1l32.6-32.6c4.6-4.6 5.9-11.5 3.5-17.4s-8.3-9.9-14.8-9.9H64c-8.8 0-16 7.2-16 16l0 112c0 6.5 3.9 12.3 9.9 14.8s12.9 1.1 17.4-3.5l34-34C148.6 459.4 199.9 480 256 480c10.9 0 21.5-.8 32-2.3V412.8c-10.3 2.1-21 3.2-32 3.2z"/>
                                    </svg>  Update Task URL and Still in Progress
                                </button>
                                <button style="font-size: 18px"  type="submit" name="action" value="complete_task"  class="btn btn-success mx-5">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                     Send Task To Client is Completed
                                </button>
                               @elseif($task->status == 0)
                                 <button style="font-size: 18px"  type="submit" name="action" value="in_progress"  class="btn btn-success mx-5">
                                    Start The Task for the client  : {{ $task->user->name }} & Send Email Message With Status :In Progress
                                </button>
                               @else
                               <a href="{{route('super_admin_approve' , ['task_id' => $task->id ])}}"  class="btn btn-info  mx-5">
                                <i class="fas fa-save mr-2"></i>Approve
                                </a>

                                <a href="{{route('super_admin_reject' , ['task_id' => $task->id ])}}" class="btn btn-danger  mx-5">
                                    <i class="fas fa-ban mr-2"></i>Reject
                                </a>
                               @endif

                                {{-- <button type="submit" name="action" value="reject"  class="btn btn-danger  mx-5"><i class="fas fa-ban mr-2"></i>
                                     Reject
                                </button> --}}

                                {{-- <button type="submit" name="action" value="in_progress"  class="btn btn-info  mx-5"><i class="fas fa-save mr-2"></i>
                                 {{ ($post) ? 'Update The Post, and  is still In Progress' : 'Save The Post, And is  Still In Progress' }}
                                </button> --}}

                                <input type="hidden" name="site_id" value="{{$task->site->id}}">
                            </div>
                        </div>
                        {{-- end c_p --}}

                    </form>
                    </div>
                    <!-- End Order Form -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/template/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        CKEDITOR.replace( 'post_editor_data', {
          /*   toolbar: [
                    { name: 'styles', items: ['Format'] },
                    { name: 'fullscreen', items: ['Maximize'] },
                    { name: 'export', items: ['ExportPdf'] }
                ], */
            language: 'en',
            uiColor: '#9AB8F3',
            uiColor: '#9AB8F3',
            filebrowserUploadUrl: "{{ route('admin') }}/upload?_token="{{request()->token}},
            filebrowserUploadMethod: 'form',
    });
    </script>


@endsection


