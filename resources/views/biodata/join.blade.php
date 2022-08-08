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
                                    <h4 class="mb-sm-0">Gabung Komunitas</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('biodata.show', $biodata->uuid) }}">Detil Biodata</a></li>                                            
                                            <li class="breadcrumb-item active">Gabung Komunitas</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Gabung Komunitas</h4>
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
                                        <h4 class="card-title">Gabung Komunitas</h4>                                        
                                        <form action="{{ route('anggotakomunitas.store') }}" method="POST" enctype="multipart/form-data">
                                           @csrf                                            
                                            <div class="mb-3">
                                                <label>Nama Komunitas</label>                                                
                                                <select class="form-control select2" name="join_komunitas">
                                                    <option value="">-- Pilih Komunitas --</option>
                                                    @foreach ($komunitas as $get)
                                                    @if (old('created_by')==$get->uuid)
                                                    <option value="{{ $get->uuid }}" selected>{{ $get->regional->nama}} - {{ $get->nama }} ({{ $get->singkatan }})</option>
                                                    @else
                                                    <option value="{{ $get->uuid }}">{{ $get->regional->nama}} - {{ $get->nama }} ({{ $get->singkatan }})</option> 
                                                    @endif
                                                    @endforeach                                                    
                                                </select>
                                                @error('created_by')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror                                            
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-md btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{ route('biodata.index') }}" class="btn btn-md btn-secondary">Back</a>
                                            </div>
                                        </form>                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                                      

            @include('footer')