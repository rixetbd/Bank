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
                <h1 class="m-0">All Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                        <h3 class="card-title">Add User</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.user.create')}}" method="post">
                            @csrf
                            <div class="my-3">
                               <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="my-3">
                                <select name="role" id="" class="form-control" required>
                                    <option value="">-- Select Role</option>
                                    @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'SuperAdmin')
                                        <option value="Admin">Admin</option>
                                        <option value="SuperAdmin" class="d-none">SuperAdmin</option>
                                    @endif
                                    <option value="basic_user">Basic User</option>
                                    <option value="Client">Client</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <input type="email" class="form-control" name="email" placeholder="email" required>
                            </div>
                            <div class="my-3">
                                <input type="text" class="form-control" name="password" placeholder="password" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Add User</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Users list</h3>
                    </div>
                    <div class="card-body">
                        <table id="example100" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Member Since</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_user as $key=>$user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{($user->role == 'basic_user'?'Basic User':$user->role)}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#" class="m-1 edit_modal" data-toggle="modal" data-target="#exampleModalCenter{{$user->id}}">
                                            <i class="fas fa-edit text-info"></i>
                                        </a>
                                        <a href="{{route('admin.user.destroy', Crypt::encrypt($user->id))}}" class="m-1"><i class="fas fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Update User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.user.update')}}" method="post">
                                                @csrf
                                                <div class="my-3">
                                                    <input type="hidden" class="form-control" name="id" placeholder="User ID" value="{{$user->id}}">
                                                    <input type="text" class="form-control" name="name" placeholder="User Name" value="{{$user->name}}" required>
                                                </div>
                                                <div class="my-3">
                                                    <select name="role" id="" class="form-control">
                                                        <option value="Admin" {{($user->role = 'Admin'? "selected":"")}}>Admin</option>
                                                        <option value="basic_user" {{($user->role = 'basic_user'? "selected":"")}}>Basic User</option>
                                                        <option value="Client" {{($user->role = 'Client'? "selected":"")}}>Client</option>
                                                        <option value="SuperAdmin" class="d-none">SuperAdmin</option>
                                                    </select>
                                                </div>
                                                <div class="my-3">
                                                    <input type="text" class="form-control" name="email" placeholder="User email" value="{{$user->email}}">
                                                </div>
                                                <div class="my-3">
                                                    <input type="text" class="form-control" name="password" placeholder="Password">
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
