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

                 {{-- start main --}}
                   <div class="container">

                   </div>
                 {{-- end main --}}

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
