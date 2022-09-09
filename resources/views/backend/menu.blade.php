@section('header_style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        .menu_button{
            background: #3f6791;
            padding: 10px;
            display: flex;
            border-radius: 5px;
        }
        .menu_button .title{width: 70%;}
        .menu_button .icon_edit, .menu_button .icon_trash{width: 15%;text-align: center;color: #fff;}
        .menu_button .icon_trash:hover i{color: red;}
    </style>
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
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Add Menu</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.menu.create')}}" method="post">
                            @csrf
                            <div class="my-3">
                                <input type="text" class="form-control" name="name" placeholder="Menu Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Add Sub Menu</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.submenu.create')}}" method="post">
                            @csrf
                            <div class="my-3">
                                <input type="text" class="form-control" name="name" placeholder="Sub Menu Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Menu List</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($all_menu as $menu)
                                <div class="col-sm-12 col-md-3 menu_box">
                                    <div class="menu_button">
                                        <span class="title">{{$menu->name}}</span>
                                        <a class="icon_edit" href="#"><i class="fas fa-edit"></i></a>
                                        <a class="icon_trash" href="{{route('admin.menu.destroy', Crypt::encrypt($menu->id))}}"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sub Menu List</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($all_menu as $key=>$menu)

                        @endforeach
                    </div>
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
