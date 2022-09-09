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
                {{-- <h1 class="m-0">All Country</h1> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Import & Export</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="min-height:70vh">

            <div class="col-md-4">
                <div class="card card-teals">
                    <div class="card-header">
                        <h3 class="card-title">Import CSV</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('LeadsCsvUpload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="LeadsCsvUpload">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <small class="">* Upload a CSV File</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </form>
                    </div>
                </div>
            </div>

            @if (Auth::user()->role == "Admin" || Auth::user()->role == "SuperAdmin")

            <div class="col-md-4">
                <div class="card card-teals">
                    <div class="card-header">
                        <h3 class="card-title">Export CSV</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('LeadExport')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <select name="name" class="form-control">
                                    <option value="all">-- Export All Country</option>
                                    @foreach ($all_country as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                <small class="">* Select specific country for export</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Export</button>
                        </form>
                    </div>
                </div>
            </div>

            @endif

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
