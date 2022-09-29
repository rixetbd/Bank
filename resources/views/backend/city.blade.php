@section('header_style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@extends('backend.master')

@section('container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">All City</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Countries</li>
                    <li class="breadcrumb-item active">Cities</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">

                <div class="card card-teals collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Add City</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="{{route('admin.city.create')}}" method="post">
                            @csrf
                            <div class="my-3">
                                <select name="country_id" id="" class="form-control">
                                    <option value="">-- Select a country</option>
                                    @foreach ($all_countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="my-3">
                                <textarea class="form-control" name="name" placeholder="City Name"></textarea>
                                <small class="mt-2">* Use commas to separate multiple cities</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Add City</button>
                        </form>
                    </div>
                </div>

                <div class="card card-teals collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">City CSV Upload</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="{{route('CityCsvUpload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="CityCsvUpload">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Country list</h3>
                    </div>
                    <div class="card-body">
                        {{-- <select name="" id="" class="form-control">
                            @foreach ($all_countries as $country)
                            <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        </select> --}}
                        <table id="example100" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>City Name</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_cities as $key=>$city)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$city->name}}</td>
                                    <td>{{$city->state_name}}</td>
                                    <td>{{$city->getCountry->name}}</td>
                                    <td>
                                        <a href="#" class="m-1 edit_modal" data-toggle="modal" data-target="#exampleModalCenter{{$city->id}}">
                                            <i class="fas fa-edit text-info"></i>
                                        </a>
                                        <a href="{{route('admin.city.destroy', $city->id)}}" class="m-1"><i class="fas fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{$city->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit city</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.city.update')}}" method="post">
                                                @csrf
                                                <div class="my-3">
                                                    <input type="hidden" class="form-control" name="id" placeholder="city ID" value="{{$city->id}}">
                                                    <input type="text" class="form-control" name="name" placeholder="city Name" value="{{$city->name}}" required>
                                                </div>
                                                <div class="my-3">
                                                    <input type="text" class="form-control" name="state_name" placeholder="Phone Code" value="{{$city->state_name}}">
                                                </div>
                                                <div class="my-3">
                                                    <input type="text" class="form-control" name="country_id" placeholder="Capital" value="{{$city->country_id}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>

                                @endforeach

                                {{--  --}}



                                {{--  --}}
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('footer_script')
    <script src="{{asset('backend_assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('backend_assets')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $("#example100").DataTable();
        $(function () {
            bsCustomFileInput.init();
        });

    </script>
@endsection
