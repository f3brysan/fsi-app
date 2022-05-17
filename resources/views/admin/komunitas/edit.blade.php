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
                                    <h4 class="mb-sm-0">Ubah Data Komunitas</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('komunitas.index') }}"> Data Komunitas</a></li>                                            
                                            <li class="breadcrumb-item active">Ubah Data Komunitas</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Ubah  Data Komunitas</h4>
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
                                        <h4 class="card-title">Ubah Data Komunitas {{ $get->nama }}</h4>                                        
                                        <form action="{{ route('komunitas.update', $get->uuid) }}" method="POST">
                                           @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label>Nama Komunitas</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $get->nama) }}" 
                                                required placeholder="Nama Komunitas"/>
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Nama Singkatan Komunitas</label>
                                                <input type="text" class="form-control @error('singkatan') is-invalid @enderror" name="singkatan" id="singkatan" value="{{ old('singkatan', $get->singkatan) }}" 
                                                required placeholder="Nama Singkatan Komunitas"/>
                                                @error('singkatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Berdiri</label>
                                                <div class="col-sm-3">
                                                    <input class="form-control" type="date" id="example-date-input" name="tgl_berdiri" value="{{ $get->tgl_berdiri }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Asal Regional</label>                                                
                                                <select class="form-control select2" name="regional_id">                                                                                                        
                                                    @foreach ($regionals as $reg)
                                                    @if (old('regional_id')==$reg->uuid)
                                                       <option value="{{ $reg->uuid }}" selected>{{ $reg->nama }}</option>                                                                                                                  
                                                       @else 
                                                       <option value="{{ $reg->uuid }}">{{ $reg->nama }}</option>
                                                    @endif
                                                    @endforeach                                                    
                                                </select>                                                
                                            </div>

                                            <div class="mb-3">
                                            <label>Deskripsi Komunitas</label>
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