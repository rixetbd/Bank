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
                <h1>Inbox</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Inbox</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="{{route('admin.package.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">First Package</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-2">
                            <label for="name" class="w-100">Name</label>
                            <input type="hidden" name="service_id" value="{{$id}}">
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" required>
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title" required>
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$" required>
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days" required>
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>
                        <div class="row file_input_1 file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="active_list_1[]">
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100"  onclick="addElement('.file_input_1','active_list_1[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>

                        <label for="active_list" class="w-100 mt-2">Deactive List</label>
                        <div class="row file_input_1_de file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="deactive_list_1[]">
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100" onclick="addElement('.file_input_1_de','deactive_list_1[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Second Package</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-2">
                            <label for="name" class="w-100">Name</label>
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" >
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title">
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$">
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days">
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>
                        <div class="row file_input_2 file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="active_list_2[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100"  onclick="addElement('.file_input_2','active_list_2[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>

                        <label for="active_list" class="w-100 mt-2">Deactive List</label>
                        <div class="row file_input_2_de file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="deactive_list_2[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100" onclick="addElement('.file_input_2_de','deactive_list_2[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Third Package</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-2">
                            <label for="name" class="w-100">Name</label>
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" >
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title">
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$">
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days">
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>
                        <div class="row file_input_3 file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="active_list_3[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100"  onclick="addElement('.file_input_3','active_list_3[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>

                        <label for="active_list" class="w-100 mt-2">Deactive List</label>
                        <div class="row file_input_3_de file_input_del">
                            <div class="col-9 input-group">
                                <input type="text" class="form-control form-control-sm" name="deactive_list_3[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100" onclick="addElement('.file_input_3_de','deactive_list_3[]')"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-secondary w-100">Save & Next</button>
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

    function addElement(IDName, inputName){
        var Rowhtml =
            `<div class="row file_input_del my-2"><div class="col-9 input-group"><input type="text" class="form-control form-control-sm" name="${inputName}" multiple></div><div class="col-3 d-flex justify-content-between"><div class="btn btn-sm btn-info" style="width:45%;margin-right:5%" onclick="addElement('${IDName}', '${inputName}')"><i class="fas fa-plus"></i></div><div style="width:45%;" class="btn btn-sm btn-danger delRow"><i class="fas fa-minus"></i></div></div></div>`;
            var tableBody = $(IDName).after(Rowhtml);

            $('.delRow').click(function () {
                $(this).parent().parent().remove();
            });
    }


</script>

@endsection
