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
                                    <h4 class="mb-sm-0">Edit Data Regional</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('regional.index') }}"> Data Regional</a></li>                                            
                                            <li class="breadcrumb-item active">Edit Data Regional</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Edit Data Regional</h4>
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
                                        <h4 class="card-title">Tambah Data Regional Baru</h4>                                        
                                        <form action="{{ route('regional.store') }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="mb-3">
                                                <label>Nama Regional</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" 
                                                required placeholder="Nama Regional" value="{{ old('nama', $get->nama) }}"/>
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                            <label>Deskripsi Regional</label>
										    <textarea class="form-control" name="content" id='content' rows="8">{{ old('content', $get->content) }}</textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-md btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{ route('regional.index') }}" class="btn btn-md btn-secondary">Back</a>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                                      

            @include('admin.footer')