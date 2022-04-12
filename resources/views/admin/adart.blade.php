@include('admin.navbar')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dokumen Anggaran Dasar dan Anggaran Rumah Tangga</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item active">AD ART</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <h4>Dokumen Anggaran Dasar dan Anggaran Rumah Tangga</h4>
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Data Anggaran Dasar dan Anggaran Rumah Tangga</h4>
                                        <p class="card-title-desc">Berikut adalah perkembangan Anggaran Dasar dan Anggaran Rumah Tangga.
                                        </p>
        
                                        <table id="adartTable" class="table table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>                                               
                                                <th>Nama Dokumen</th>
                                                <th>Tahun Rilis</th>                                                
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>                                               
                                                <td>Anggaran Dasar dan Anggaran Rumah Tangga Mukernas Pandeglang</td>
                                                <td>2022</td>
                                                <td><a href="" class="btn btn-sm btn-primary"><i class="ri-file-download-fill"></i> Unduh</a></td>                                                
                                            </tr>
                                            <tr>                                               
                                                <td>Anggaran Dasar dan Anggaran Rumah Tangga Mukernas Sumbawa</td>
                                                <td>2019</td>
                                                <td><a href="" class="btn btn-sm btn-primary"><i class="ri-file-download-fill"></i> Unduh</a></td>                                                
                                            </tr>                                     
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->                               

            @include('admin.footer')