@extends('backend.master')

@section('header_style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .dataTables_paginate{display: none;}
        .custom_paginate{margin-top: -30px};
    </style>
@endsection

@section('container')

    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">All Leads Information</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home </a></li>
                    <li class="breadcrumb-item active">All Leads</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> --}}
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No.</th>
                <th>Person Name</th>
                <th>Title</th>
                <th>Email</th>
                <th>Phone</th>
                <th>COMPANY NAME</th>
                <th>INDUSTRY</th>
                {{-- <th>COMPANY SIZE</th> --}}
                <th>REVENUE</th>
                {{-- <th>ZIP Code</th> --}}
                <th>CITY</th>
                <th>Links</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($lead_data as $key=> $lead)
                    <tr>
                        {{-- <td>{{$key+1}}</td> --}}
                        <td>{{(($lead_data->perPage() * $lead_data->currentPage())+$key+1)-$lead_data->perPage()}}</td>
                        <td>{{$lead->person_name}}</td>
                        <td>{{$lead->title}}</td>
                        <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}</td>
                        <td>{{$lead->phone}}</td>
                        <td>{{$lead->company_name}}</td>
                        <td>{{$lead->industry}}</td>
                        <td>{{$lead->revenue}}</td>
                        <td>{{$lead->city}}</td>
                        <td>
                            {{-- <a href="{{$lead->website}}" class="btn btn-sm btn-success" target="_blank" title="Website"><i class="fas fa-globe text-dark"></i></a> --}}
                            {{-- <a href="{{$lead->source_link}}" class="btn btn-sm btn-primary" target="_blank" title="Links"><i class="fas fa-link"></i></a> --}}
                            {{-- <a href="{{$lead->source_link2}}" class="btn btn-sm btn-info" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a> --}}
                            <a href="#" class="btn btn-sm btn-success" target="_blank" title="Website"><i class="fas fa-globe text-dark"></i></a>
                            <a href="#" class="btn btn-sm btn-primary" target="_blank" title="Links"><i class="fas fa-link"></i></a>
                            <a href="#" class="btn btn-sm btn-info" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin.leads.single.delete', Crypt::encrypt($lead->id))}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    @empty
                      <tr>
                        <td colspan="12" class="text-center">Not Found Any Data.</td>
                      </tr>
                    @endforelse
                </tfoot>
            </table>
            <div class="row justify-content-end custom_paginateh">
                {{ $lead_data->links() }}
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </div>
</section>

@endsection


@section('footer_script')
    <script src="{{asset('backend_assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('backend_assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf",  "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
    </script>

@endsection
