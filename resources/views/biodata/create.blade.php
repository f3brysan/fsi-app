@include('biodata.navbar')
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
                                                required placeholder="Contoh : Smith John"/>
                                                @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Nama Beken/Keren/Panggilan</label>
                                                <input type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" id="nickname" value="{{ old('nickname') }}" 
                                                required placeholder="Contoh : Smith"/>
                                                @error('nickname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>No Handphone</label>
                                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" 
                                                required placeholder="Contoh : 0897XXXXXX"/>
                                                @error('no_hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" id="birth_place" value="{{ old('birth_place') }}" 
                                                required placeholder="Contoh : Surakarta"/>
                                                @error('birth_place')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                    <input class="form-control @error('birth_day') is-invalid @enderror" type="date" id="example-date-input" name="birth_day">
                                                    @error('birth_day')
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
                                                <label>Provinsi Domisili Asal</label>  
                                                <select class="form-control select2" name="province_id" id="provinsi">
                                                    <option value="">-- Pilih Provinsi --</option>
                                                    @foreach ($prov as $prov)
                                                        <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                                    @endforeach      
                                                </select>
                                                @error('province_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota/Kabupaten Domisili Asal</label>  
                                                <select class="form-control select2" name="city_id" id="kabupaten" required>                                                    
                                                </select>                                                
                                            </div>
                                            <div class="mb-3">
                                                <label>Alamat Domisili Asal</label>
                                                <input type="text" class="form-control @error('domisili') is-invalid @enderror" name="domisili" id="domisili" value="{{ old('domisili') }}" 
                                                required placeholder="Contoh : Jl. Raya Kalimantan Blok AA. Kawasan Industri MM2100"/>
                                                @error('domisili')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Jenis Kelamin</label>  
                                                <select class="form-control select2" name="gender" id="gender" required>
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                        <option value="L">Laki - laki</option>   
                                                        <option value="P">Perempuan</option>                                                    
                                                </select>
                                                @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Golongan Darah</label>  
                                                <select class="form-control select2" name="blood" id="blood" required>
                                                    <option value="">-- Pilih Jenis Golongan Darah --</option>
                                                        <option value="A">Golongan Darah A</option>   
                                                        <option value="B">Golongan Darah B</option>
                                                        <option value="O">Golongan Darah O</option>
                                                        <option value="AB">Golongan Darah AB</option>                                                    
                                                </select>
                                                @error('blood')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Jenis Kendaraan</label>  
                                                <select class="form-control select2" name="jenis_motor" id="jenis_motor">
                                                    <option value="">-- Pilih Jenis Kendaraan --</option>
                                                    @foreach ($motor as $motor)
                                                        <option value="{{ $motor->uuid }}">{{ $motor->jenis_motor }}</option>
                                                    @endforeach      
                                                </select>
                                                @error('jenis_motor')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>No Rangka</label>
                                                <input type="text" class="form-control @error('no_rangka') is-invalid @enderror" name="no_rangka" id="no_rangka" value="{{ old('no_rangka') }}" 
                                                required placeholder="Contih : MHB1231AWERGxxxxx"/>
                                                @error('no_rangka')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>No Mesin</label>
                                                <input type="text" class="form-control @error('no_mesin') is-invalid @enderror" name="no_mesin" id="no_mesin" value="{{ old('no_mesin') }}" 
                                                required placeholder="Contoh : J1A2321xxxx"/>
                                                @error('no_mesin')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>No SIM</label>
                                                <input type="text" class="form-control @error('no_sim') is-invalid @enderror" name="no_sim" id="no_sim" value="{{ old('no_sim') }}" 
                                                required placeholder="Contoh : 9912312XXX"/>
                                                @error('no_sim')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-md btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="/home" class="btn btn-md btn-secondary">Back</a>
                                            </div>
                                        </form>                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                                      

            @include('biodata.footer')