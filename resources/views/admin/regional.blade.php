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
                                    <h4 class="mb-sm-0">Data Regional</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item active">Data Regional</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <h4>Data Regional</h4>
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Data Regional</h4>
                                        <p class="card-title-desc">Berikut adalah daftar regional di Federasi Supra Indonesia.
                                        </p>
        
                                        <table id="adartTable" class="table table-responsive">
                                            <thead>
                                            <tr>                                               
                                                <th>No</th>
                                                <th>Nama Regional</th> 
                                                <th>Status</th>                                               
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($regionals as $regional)  
                                            <tr>
                                                <td>{{ $no++ }}</td>                                                  
                                                <td>{{ $regional['nama'] }}</td>                                                
                                                <td>@if ($regional['verified_at']== NULL)
                                                {{-- <span class="badge bg-danger">Belum Terverifikasi</span>                                                 --}}
                                                Ditangguhkan
                                                @else
                                                {{-- <span class="badge bg-success">Sudah Terverifikasi</span>                                               --}}
                                                Lolos
                                                @endif</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary"><i class="ri-chat-check-fill"></i></a>
                                                                                                
                                                </td>
                                            </tr>                                                                            
                                            @endforeach
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