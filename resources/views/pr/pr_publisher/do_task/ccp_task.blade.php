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
                    <div class="col-sm-3"><span   style="font-size: 25px;" class="alert alert-primary">Task ID #{{ $task->id }}</span></div>
                    <div class="col-sm-5">
                        @if (!empty($task))
                        <div  class="text-center">

                            @if ($task->status == 6)
                             <span style="font-size: 25px;" class="alert alert-danger">The Task Is Rejected</span>
                            @elseif($task->status == 5)
                                <span style="font-size: 19px;" class="alert alert-success opacity-25">The Task Is Completed</span>
                            @elseif($task->status == 9)
                                 <span style="font-size: 20px;" class="alert alert-warning">Wait For The Publisher : <span class="text-danger">https://{{ $task->site->site_url }}</span> Approve Your Post</span>
                            @elseif($task->status == 1)
                            <span style="font-size: 25px;" class="alert alert-info">The Task Is In Progress</span>
                            @elseif($task->status == 4)
                                <span style="font-size: 16px;" class="alert alert-info">The Task is in Approvement Zone</span>
                            @elseif($task->status == 2)
                                <span style="font-size: 16px;" class="alert alert-info">Your Task is in Approvement Zone Check it And Approve or Send Impprovement Requiest </span>
                            @else
                               <span  style="font-size: 25px;" class="alert alert-warning">Your Task still not Started</span>
                            @endif

                        </div>
                        @endif
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">tasks by user by project</li>
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


                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="bg-primary text-white">Service Type</td>
                                                    <td class="text-primary font-weight-bold">
                                                        Content Creation And Placement
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
                                                    <td class="table-success"><a href="#" target="_blank"
                                                            class="font-weight-bold">{{ $post->post_title ?? '' }}</a>
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


                        {{-- start c_c_p --}}
                        @if (!empty($post))
                        <form action="{{ route('update_post', ['project_id' => request()->project_id , 'task_id' => request()->task_id , 'post_id' => $post->id ]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        @else           {{-- publisher_store_task --}}
                        <form action="{{ route('store_post', ['project_id' => request()->project_id , 'task_id' => request()->task_id ]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        @endif

                        <div class="mt-3">
                            <div class="card ">
                                <div class="card-header bg-info">
                                    <h3 class="text-white mt-n2 mb-n2"> Start Create The Post Content , And  Now the Task {{ ($post) ? $task->show_status() : '' }}  </h3>
                                </div>
                                <div class="card-body">
                                    @if (!empty($task->post))
                                    @if ($task->post->status == 4)
                                    <div class="my-2 px-5">
                                        <label class="text-primary" for="post_placement_url">Note From Client : <span class="text-primary"> {{ $task->user->name }} </span> For Update The Post:</label>
                                        <textarea readonly name="note" class="form-control" cols="30" rows="5">@php $the_notes = '';$index = 1;foreach ($post->notes as $note) {$the_notes = "$index ) :  $note->post_note <br/>";echo str_replace("<br/>","\n\n",$the_notes);$index++;} @endphp</textarea>
                                    </div>
                                    @endif
                                    @endif

                                    <div class="my-2 px-5">
                                      <label class="text-primary" for="post_placement_url">Post Placement URL:</label>
                                      <input  style="color: red;" value="{{ (!empty($post->post_title)) ? $post->post_title : 'https://'.$task->site->site_url.'/'.Str::slug($task->task_anchor_text) }}" type="text" class="form-control" name="post_placement_url" id="post_placement_url">
                                    </div>

                                    <div class="my-2 px-5">
                                        <label class="text-primary" for="post_editor_data">Post Content :	</label>
                                        <textarea  id="post_editor_data"   class="my-3" name="post_editor_data">{!! ($post) ? $post->post_body : '' !!}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-center">

                            @if(!empty($task))

                                    @if(empty($post))
                                    <button style="font-size: 18px" type="submit" name="action" value="in_progress"  class="btn btn-primary  mx-5">
                                        <i class="fas fa-save mr-2"></i>
                                        Save The Post & is still in Progress
                                    </button>

                                    @else

                                        @if ($post->status == 1 || $post->status == 2)
                                        <button {{ ($post->status == 2) ? 'disabled' : ''}} style="font-size: 18px"  type="submit" name="action" value="in_progress"  class="btn btn-info mx-5">
                                            <i class="fas fa-spinner mr-2"></i>
                                            Update The Post & is still in Progress
                                        </button>
                                        @endif

                                                @if($post->status == 2)
                                                    <button style="font-size: 18px" disabled  type="submit" name="action" value="client_approval"  class="btn btn-warning mx-5">
                                                        <i class="fas fa-check mr-2"></i>The Notification Already sent to Client At [{{$post->updated_at->diffForHumans()}} ] waiting The Approval  Or Improvement Or Rejectd
                                                    </button>
                                                @elseif($post->status == 1)
                                                    <button style="font-size: 18px"  type="submit" name="action" value="client_approval"  class="btn btn-warning mx-5">
                                                        <i class="fas fa-check mr-2"></i>
                                                        Send The Post To Client for Get The Approval
                                                    </button>
                                                 @elseif($post->status == 4)
                                                    <button style="font-size: 18px" type="submit" name="action" value="client_approval"  class="btn btn-info mx-5">
                                                        <i class="fas fa-spinner mr-2"></i>
                                                        Improve the post and update it & Send The Post To Client for Get The Approval
                                                    </button>
                                                   {{--  <button style="font-size: 18px"  type="submit" name="action" value="client_approval"  class="btn btn-warning mx-5">
                                                        <i class="fas fa-check mr-2"></i>
                                                        Send The Post To Client for Get The Approval
                                                    </button> --}}
                                                    @elseif($post->status == 6)

                                                    <p aria-readonly="true" class="btn btn-danger btn-block my-3">The Client Reject the Post</p>

                                                    <button style="font-size: 18px" type="submit" name="action" value="client_approval"  class="btn btn-info mx-5">
                                                        <i class="fas fa-spinner mr-2"></i>
                                                        Speak with client and Improve and update the post
                                                    </button>
                                                    <button style="font-size: 18px"  type="submit" name="action" value="client_approval"  class="btn btn-warning mx-5">
                                                        <i class="fas fa-check mr-2"></i>
                                                        Send The Post To Client for Get The Approval
                                                    </button>

                                                    @elseif($post->status == 9)
                                                    <button style="font-size: 18px"  type="submit" name="action" value="publisher_approval"  class="btn btn-success mx-5">
                                                        <i class="fas fa-check mr-2"></i>
                                                         Publisher Approve The Post & Send Email To client : {{ $task->user->name }}
                                                    </button>

                                                    <button type="submit" name="action" value="publisher_reject"  class="btn btn-danger  mx-5"><i class="fas fa-ban mr-2"></i>
                                                        Publisher Reject The Post & Send Email To client : {{ $task->user->name }}
                                                   </button>
                                                    @else
                                                           <span class="btn btn-success">Task its Completed</span>

                                                           {{-- <button style="font-size: 18px" type="submit" name="action" value="client_approval"  class="btn btn-info mx-5">
                                                            <i class="fas fa-spinner mr-2"></i>
                                                            Super admin permession :  Edit And Update The Post
                                                        </button> --}}
                                                @endif


                                    @endif

                            @else
                               <button class="btn btn-danger">There is no task now</button>
                            @endif

                            <input type="hidden" name="site_id" value="{{$task->site->id}}">
                        </div>
                       </form>
                        {{-- end c_c_p --}}



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
        language: 'en',
        uiColor: '#9AB8F3',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{ route('admin') }}/upload?_token="{{request()->token}},
        filebrowserUploadMethod: 'form',
    });
    </script>


@endsection

