@extends('seller.layouts.app')
@section('content')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="p-2">
                                        <h5 class="card-title">Basic Datatable</h5>
                                    </div>
                                    <div class="p-2">
                                        <a href="/seller/bird/input" class="btn btn-primary">Tambah Burung</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Burung</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Umur</th>
                                                <th>Harga</th>
                                                <th>Deksripsi</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($birds as $data)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$data->jenis_burung}}</td>
                                                <td>{{$data->jenis_kelamin}}</td>
                                                <td>{{$data->umur}}</td>
                                                <td>Rp.{{number_format($data->harga)}}</td>
                                                <td>{{$data->deskripsi}}</td>
                                                <td>
                                                    <img src="{{asset('src/images/birds/'.$data->gambar)}}" width="50px" height="50px" alt="">
                                                </td>
                                                <td><div class="d-flex justify-content-between">
                                                    <div class="p-0">
                                                        <a href="/seller/bird/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
                                                    </div>
                                                    <div class="p-0">
                                                        <a href="/seller/bird/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
@endsection