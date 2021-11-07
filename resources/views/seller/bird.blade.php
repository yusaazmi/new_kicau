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
                        <h4 class="page-title">Form Basic</h4>
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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/seller/bird/input">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Form Input Burung</h4>
                                    <div class="form-group row">
                                        <label for="jenis_burung"
                                            class="col-sm-3 text-end control-label col-form-label">Jenis Burung</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="jenis_burung" name="jenis_burung"
                                                placeholder="Jenis Burung">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-3 text-end control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    id="customControlValidation1" name="jenis_kelamin" required value="jantan">
                                                <label class="form-check-label mb-0" for="customControlValidation1">Jantan</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    id="customControlValidation2" name="jenis_kelamin" required value="betina">
                                                <label class="form-check-label mb-0" for="customControlValidation2">Betina</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="umur"
                                            class="col-sm-3 text-end control-label col-form-label">Umur</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="umur" class="form-control" id="umur"
                                                placeholder="Umur Burung">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga"
                                            class="col-sm-3 text-end control-label col-form-label">Harga</label>
                                        <div class="col-sm-9">
                                            <input type="text"  class="form-control" id="harga"
                                                placeholder="Harga Burung" name="harga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- editor -->
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