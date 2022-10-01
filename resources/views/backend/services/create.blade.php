@extends('backend.master')


@section('header_style')
<link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/summernote/summernote-bs4.min.css">
<style>
    .inbox_css .nav-link i {
        min-width: 30px;
        text-align: center
    }

    .note-editable.card-block {
        height: 200px;
    }

    .form-control-file {
        border: 1px solid #fff;
        margin: 0;
        height: 32px;
    }

</style>
@endsection


@section('container')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>New Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.service.index')}}">Service</a></li>
                    <li class="breadcrumb-item active">New Service</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <!-- /.col -->
            <div class="col-md-8">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Create New Service</h3>
                    </div>
                    {{-- name	title	category	price	author	description	status --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Service Name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="category" placeholder="Category">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea id="compose-textarea" name="description" class="form-control"
                                style="min-height: 500px"></textarea>
                        </div>
                        {{-- <div class="row file_input file_input_del">
                            <div class="col-11 input-group">
                                <input type="file" class="form-control-file" name="image[]" multiple>
                            </div>
                            <div class="col-1">
                                <div class="btn btn-info w-100" onclick="NewRow()"><i class="fas fa-plus"></i></div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" name="action" value="save" class="btn btn-default"><i class="fa fa-archive mr-1"></i> Draft</button>
                            <button type="submit" name="action" value="next" class="btn btn-primary"><i class="far fa-save mr-1"></i> Next</button>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Image/Video</h3>
                    </div>
                    <div class="card-body">
                        <div class="row file_input file_input_del">
                            <div class="col-9 input-group">
                                <input type="file" class="form-control-file" name="image[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100" onclick="NewRow()"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </form>
</section>



@endsection



@section('footer_script')

<script>
    $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass(
                    'fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass(
                    'fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for font awesome
        $('.mailbox-star').click(function (e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var fa = $this.hasClass('fa')

            //Switch states
            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })

</script>

<script src="{{asset('backend_assets')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('backend_assets')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<script>
    $(function () {
        //Add text editor
        $('#compose-textarea').summernote();
        bsCustomFileInput.init();
    })

</script>

<script>
    function NewRow() {
        // alert($('.file_input').length);
        var RowNo = ($('.file_input').length - 0) + 1;
        var Rowhtml =
            `<div class="row file_input_del my-2"><div class="col-9 input-group"><input type="file" class="form-control-file" name="image[]" multiple></div><div class="col-3 d-flex justify-content-between"><div class="btn btn-sm btn-info" style="width:45%;margin-right:5%" onclick="NewRow()"><i class="fas fa-plus"></i></div><div style="width:45%;" class="btn btn-sm btn-danger delRow"><i class="fas fa-minus"></i></div></div></div>`;
        var tableBody = $('.file_input').after(Rowhtml);

        $('.delRow').click(function () {
            $(this).parent().parent().remove();
        });

    }

    // $('.file_input_del').delegate('.delRow', 'click', function (){
    //     // $(this).parent().parent().remove();
    // })

</script>

@endsection
