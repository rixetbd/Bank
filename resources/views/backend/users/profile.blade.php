@extends('backend.master')

@section('header_style')

@endsection


@section('container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="min-height: 40vh">
            <div class="col-md-4">
                <div class="card card-teals">
                    <div class="card-header">
                        <h3 class="card-title">Profile</h3>
                    </div>
                    <div class="card-body text-center">
                        {{-- <img src="" alt="{{Auth::user()->name}}"> --}}
                        @if (Auth::user())
                            <i class='bx bx-user bx-lg bx-border-circle' ></i>
                        @endif
                        <h5 class="my-2">{{Auth::user()->name}}</h5>
                        <h6 class="mb-2">
                            @if (Auth::user()->role == 'basic_user')
                                Basic User
                            @else
                                {{Auth::user()->role}}
                            @endif
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@section('footer_script')

@endsection
