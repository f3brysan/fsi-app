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
                                    <h4 class="mb-sm-0">Edit Event</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('event.index') }}"> Data Event</a></li>                                            
                                            <li class="breadcrumb-item active">Edit Event</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Edit Event {{ $get->nama }}</h4>
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
                                        <h4 class="card-title">Tambah Data Event Baru</h4>                                        
                                        <form action="{{ route('event.update', $get->uuid) }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                           @method('PUT')
                                            <div class="mb-3">
                                                <label>Nama Acara</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $get->nama) }}" required placeholder="Nama Acara"/>
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>                                            
                                            <div class="mb-3">                                                
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal Acara Dimulai</label>
                                            <div class="col-sm-10">
                                                @php
                                                    $date_start = date_create($get->its_start);
                                                    $date_start = date_format($date_start, "Y-m-d\TH:i:s");
                                                @endphp
                                                <input class="form-control @error('its_start') is-invalid @enderror " type="datetime-local" value="{{ old('its_start', $date_start) }}" id="example-datetime-local-input" name="its_start">
                                                @error('its_start')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal Acara Selesai</label>
                                            <div class="col-sm-10">
                                                @php
                                                    $date_end = date_create($get->its_end);
                                                    $date_end = date_format($date_end, "Y-m-d\TH:i:s");
                                                @endphp
                                                <input class="form-control @error('its_end') is-invalid @enderror " type="datetime-local" value="{{ old('its_end', $date_end) }}" id="example-datetime-local-input" name="its_end">
                                                @error('its_end')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Komunitas Penyelenggara</label>                                                
                                                <select class="form-control select2" name="created_by">                                                    
                                                    @foreach ($komunitas as $kom)
                                                    @if (old('created_by', $get->created_by) == $kom->uuid)
                                                    <option value="{{ $kom->uuid }}" selected>{{ $kom->regional->nama}} - {{ $kom->nama }} ({{ $kom->singkatan }})</option>
                                                    @else
                                                    <option value="{{ $kom->uuid }}">{{ $kom->regional->nama}} - {{ $kom->nama }} ({{ $kom->singkatan }})</option> 
                                                    @endif
                                                    @endforeach                                                    
                                                </select>
                                                @error('created_by')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="picture">Flyer Acara</label>
                                                <input type="hidden" name="oldPicture" value="{{ $get->picture }}">
                                                @if ($get->picture)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/'.$get->picture) }}" class="img-fluid mb-3" id="category-img-tag" width="200px" /> 
                                                    </div>   
                                                @else
                                                 <div class="mb-3">
                                                <img src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" class="img-fluid mb-3" id="category-img-tag" width="200px" /> 
                                                </div>   
                                                @endif                                                
                                                <div class="input-group">
                                                    <input type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" id="cat_image" accept="image/*" onchange="previewImage">
                                                    @error('picture')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                            <label>Deskripsi Acara</label>
										    <textarea class="form-control" name="content" id='content' rows="8">{{ old('content', $get->content) }}</textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-md btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{ route('event.index') }}" class="btn btn-md btn-secondary">Back</a>
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