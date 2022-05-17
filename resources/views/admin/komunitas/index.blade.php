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
                                    <h4 class="mb-sm-0">Data Komunitas</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item active">Data Komunitas</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <h4>Data Komunitas</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Notifikasi menggunakan flash session data -->
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @if (session('error'))
                                        <div class="alert alert-error">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                                <h4 class="card-title">Data Club dan Komunitas</h4>
                                        <p class="card-title-desc">Berikut adalah daftar <em>club</em> dan komunitas di Federasi Supra Indonesia.
                                        </p>
                                        <a href="{{ route('komunitas.create') }}" class="btn btn-sm btn-primary mb-3 float-right"><i class="ri-add-box-fill"></i> Tambah Baru</a>
                                        <table id="regionalsTable" class="table table-responsive">
                                            <thead>
                                            <tr>                                               
                                                <th>No</th>
                                                <th>Nama Komunitas</th>
                                                <th>Regional</th>                                                                                     
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($komunitas as $get)  
                                            <tr>
                                                <td>{{ $no++ }}</td>                                                  
                                                <td>{{ $get->nama }}</td> 
                                                <td>{{ $get->regional->nama }}</td>                                                                                               
                                                <td>
                                                    <a href="{{ route('komunitas.edit', $get->uuid) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line
                                                        "></i> Ubah</a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('komunitas.destroy', $get->uuid) }}" method="POST" class="d-inline">                                            
                                            @method('DELETE')
                                            @csrf                                            
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-2-line"></i> Hapus</button>
                                        </form>
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