@include('admin.biodata.navbar')
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
                                    <h4 class="mb-sm-0">Isi Data Diri</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/home"> Beranda</a></li>                                            
                                            <li class="breadcrumb-item active">Isi Data Diri</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Isi Data Diri</h4>
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
                                        <h4 class="card-title">Isi Data Diri Anda</h4>                                        
                                        <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                            <div class="mb-3">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="fullname" id="fullname" value="{{ old('fullname') }}" 
                                                required placeholder="Nama Lengkap"/>
                                                @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Nama Beken/Keren/Panggilan</label>
                                                <input type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" id="nickname" value="{{ old('nickname') }}" 
                                                required placeholder="Nama Beken/Keren/Panggilan"/>
                                                @error('nickname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>No Handphone</label>
                                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" 
                                                required placeholder="No Handphone"/>
                                                @error('no_hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" id="birth_place" value="{{ old('birth_place') }}" 
                                                required placeholder="Kota Kelahiran"/>
                                                @error('birth_place')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                    <input class="form-control @error('birth_day') is-invalid @enderror" type="date" id="example-date-input" name="tgl_berdiri">
                                                    @error('birth_place')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="picture">Foto Diri <p class="text-muted">(maks: 1 Mb)</p></label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" id="picture" accept="image/*">
                                                    @error('picture')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                            <label>Deskripsi Komunitas</label>
										    <textarea class="form-control" name="content" id='content' rows="8"></textarea>
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