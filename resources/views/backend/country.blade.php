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
                <h1 class="m-0">All Country</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Countries</li>
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
                <div class="card card-success collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Add Country Name</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="{{route('admin.countrie.create')}}" method="post">
                            @csrf
                            <div class="my-3">
                                <input type="text" class="form-control" name="name" placeholder="Country Name" required>
                            </div>
                            <div class="my-3 row">
                                <div class="col-6"><input type="text" class="form-control" name="iso2" placeholder="Shortname (ISO2)" required></div>
                                <div class="col-6"><input type="text" class="form-control" name="iso3" placeholder="Shortname (ISO3)" required></div>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="phonecode" placeholder="Phone Code" required>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="capital" placeholder="Capital" required>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="region" placeholder="Region" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </form>
                    </div>
                </div>

                <div class="card card-infos collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Add State</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="" method="post">
                            @csrf
                            <div class="my-3">
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select a country</option>
                                    @foreach ($all_countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="" placeholder="State Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </form>
                    </div>
                </div>

                <div class="card card-teals collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Add City</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="" method="post">
                            @csrf
                            <div class="my-3">
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select a country</option>
                                    @foreach ($all_countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="" placeholder="City Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </form>
                    </div>
                </div>

                <div class="card card-teals collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">CSV Upload</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <form action="{{route('countries.csv.upload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="countryCSV">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Insert</button>
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
                        <table id="example100g" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Country</th>
                                    <th>ISO2</th>
                                    <th>Phone Code</th>
                                    <th>Capital</th>
                                    <th>Region</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_countries as $key=>$country)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$country->name}}</td>
                                    <td>{{$country->iso2}}</td>
                                    <td>{{$country->phonecode}}</td>
                                    <td>{{$country->capital}}</td>
                                    <td>{{$country->region}}</td>
                                    <td>
                                        <a href="#" class="m-1"><i class="fas fa-edit text-info"></i></a>
                                        <a href="#" class="m-1"><i class="fas fa-trash text-danger"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                                {{-- @forelse ($all_cities as $key=>$city)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $city->name }}</td>
                                    {{-- <td>{{ $city->cityToState()->name }}</td> --}}
                                    {{-- <td>{{DB::table('states')->find($city->state_id)->name}}</td>
                                    <td>{{ '$city->country_id' }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="">There are no data.</td>
                                </tr>
                                @endforelse --}}
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
