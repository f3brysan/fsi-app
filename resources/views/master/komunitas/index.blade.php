@include('navbar')
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
                                        <a href="{{ route('PPkomunitas.create') }}" class="btn btn-sm btn-primary mb-3 float-right"><i class="ri-add-box-fill"></i> Tambah Baru</a>
                                        <table id="regionalsTable" class="table table-striped table-bordered dt-responsive ">
                                            <thead>
                                            <tr>                                                                                             
                                                <th>Nama Komunitas</th>
                                                <th>Regional</th>                                                                                     
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>                                                
                                                @foreach ($komunitas as $get)  
                                            <tr>                                                                                               
                                                <td>{{ $get->nama }} </</td> 
                                                <td>{{ $get->regional->nama }}</td>                                                                                               
                                                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('PPkomunitas.show', $get->uuid) }}" class="btn btn-sm btn-info"><i class="ri-eye-line"> Lihat</i></a>
                                                    <a href="{{ route('PPkomunitas.edit', $get->uuid) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line
                                                        "></i> Ubah</a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('PPkomunitas.destroy', $get->uuid) }}" method="POST" class="d-inline">                                            
                                            @method('DELETE')
                                            @csrf                                            
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-2-line"></i> Hapus</button>
                                        </form>
                                                </div>                                                    
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
                                      

            @include('footer')