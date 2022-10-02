@extends('backend.master')


@section('header_style')
<link rel="stylesheet" href="{{asset('backend_assets/plugins/lightbox/css/lightbox.css')}}">
<style>
    .inbox_css .nav-link i {
        min-width: 30px;
        text-align: center
    }

    .note-editable.card-block {
        height: 200px;
    }
</style>
@endsection


@section('container')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Service</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total Summary</h3>
                </div>
                <div class="card-body">



                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">All Service List</h3>
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
                                <th>Name</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($all_service as $key=>$service)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <span title="{{$service->name}}">{{Str::limit($service->name, 20)}}</span>
                                </td>
                                <td>
                                    <span title="{{$service->title}}">{{Str::limit($service->title, 30)}}</span>
                                </td>
                                <td>
                                    <span title="{{$service->category}}">{{Str::limit($service->category, 20)}}</span>
                                </td>
                                <td>
                                    @php
                                        {{ $service_img = \App\Models\ServiceImage::where('service_id', $service->id)->get(); }}
                                    @endphp

                                    @forelse ($service_img as $item)
                                        <a href="{{asset('uploads/service_banner/'.$item->banner)}}" data-lightbox="roadtrip" style="margin-right:5px;">
                                            <img src="{{asset('uploads/service_banner/'.$item->banner)}}" alt="" width="50px">
                                        </a>
                                    @empty

                                    @endforelse
                                </td>
                                <td>
                                    @if ($service->status == 1)
                                        <a href="{{route('admin.service.status', $service->id)}}" class="m-1"><i class="fas fa-toggle-on fa-2x text-success"></i></a>
                                    @else
                                        <a href="{{route('admin.service.status', $service->id)}}" class="m-1"><i class="fas fa-toggle-off fa-2x text-danger"></i></a>
                                    @endif
                                </td>
                                <td>{{$service->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('admin.service.edit', $service->id)}}" class="m-1"><i class="fas fa-edit text-info"></i></a>
                                    <a href="{{route('admin.service.destroy', $service->id)}}" class="m-1"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>

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

</section>

@endsection



@section('footer_script')
    <script src="{{asset('backend_assets/plugins/lightbox/js/lightbox.min.js')}}"></script>
@endsection
