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
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" required value="{{($package_info[0]->name != ""?$package_info[0]->name : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title" required value="{{($package_info[0]->title != ""?$package_info[0]->title : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$" required value="{{($package_info[0]->price != ""?$package_info[0]->price : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days" required value="{{($package_info[0]->duration != ""?$package_info[0]->duration : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description">{{($package_info[0]->description != ""?$package_info[0]->description : "")}}</textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>
                        @php
                            $package_lists0 = App\Models\PackageList::where('package_id', $package_info[0]->id)->where('status', '1')->get();
                            $package_lists_del0 = App\Models\PackageList::where('package_id', $package_info[0]->id)->where('status', '0')->get();
                        @endphp

                        @if (!empty($package_lists0))
                            @foreach ($package_lists0 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="active_list_1[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
                        @if (!empty($package_lists_del0))
                            @foreach ($package_lists_del0 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="deactive_list_1[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" value="{{($package_info[1]->name != ""?$package_info[1]->name : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title" value="{{($package_info[1]->title != ""?$package_info[1]->title : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$" value="{{($package_info[1]->price != ""?$package_info[1]->price : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days" value="{{($package_info[1]->duration != ""?$package_info[1]->duration : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description">{{($package_info[1]->description != ""?$package_info[1]->description : "")}}</textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>

                        @php
                            $package_lists1 = App\Models\PackageList::where('package_id', $package_info[1]->id)->where('status', '1')->get();
                            $package_lists_del1 = App\Models\PackageList::where('package_id', $package_info[1]->id)->where('status', '0')->get();
                        @endphp

                        @if (!empty($package_lists1))
                            @foreach ($package_lists1 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="active_list_2[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
                        @if (!empty($package_lists_del1))
                            @foreach ($package_lists_del1 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="deactive_list_2[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
                            <input type="text" class="form-control" name="name[]" placeholder="First Package Name ( Ex - Silver )" value="{{($package_info[2]->name != ""?$package_info[2]->name : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="title" class="w-100">Title</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Package Title" value="{{($package_info[2]->title != ""?$package_info[2]->title : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="price" class="w-100">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="$" value="{{($package_info[2]->price != ""?$package_info[2]->price : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="duration" class="w-100">Duration</label>
                            <input type="number" class="form-control" name="duration[]" placeholder="Days" value="{{($package_info[2]->duration != ""?$package_info[2]->duration : "")}}">
                        </div>
                        <div class="input-group my-2">
                            <label for="description" class="w-100">Description</label>
                            <textarea name="info[]" class="form-control" placeholder="Description">{{($package_info[0]->description != ""?$package_info[0]->description : "")}}</textarea>
                        </div>
                        <label for="active_list" class="w-100">Active List</label>

                        @php
                            $package_lists2 = App\Models\PackageList::where('package_id', $package_info[2]->id)->where('status', '1')->get();
                            $package_lists_del2 = App\Models\PackageList::where('package_id', $package_info[2]->id)->where('status', '0')->get();
                        @endphp

                        @if (!empty($package_lists2))
                            @foreach ($package_lists2 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="active_list_3[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
                        @if (!empty($package_lists_del2))
                            @foreach ($package_lists_del2 as $item)
                                <div class="row my-2 delList_{{$item->id}}">
                                    <div class="col-9 input-group">
                                        <input type="text" class="form-control form-control-sm" name="deactive_list_3[]" multiple value="{{$item->info}}">
                                    </div>
                                    <div class="col-3">
                                        <div class="btn btn-sm btn-danger w-100"  onclick="delListElement('{{$item->id}}','.delList_{{$item->id}}')"><i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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


<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function delListElement(elementID , className)
    {
        $.ajax({
            type: 'POST',
            url: '/packageList/delListElement',
            data: {'elementID': elementID},
            success: function (data) {
                $(`${className}`).remove();
            }
        });
    }

</script>

@endsection
