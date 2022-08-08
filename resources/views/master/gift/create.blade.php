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
                                    <h4 class="mb-sm-0">Tambah Data Hadiah</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('PPkomunitas.index') }}"> Data Hadiah</a></li>                                            
                                            <li class="breadcrumb-item active">Tambah Data Hadiah</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Tambah Data Hadiah</h4>
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
                                        <h4 class="card-title">Tambah Data Hadiah Baru</h4>                                        
                                        <form action="{{ route('PPgifts.store') }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                            <div class="mb-3">
                                                <label>Nama Hadiah</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" 
                                                required placeholder="Contoh : Jaket Alipinestar"/>
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Poin yang dibutuhkan</label>
                                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" 
                                                required placeholder="Contoh : 250"/>
                                                @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>                                                                                       
                                            <div class="mb-3">
                                                <label for="picture">Gambar hadiah</label>
                                                <div class="mb-3">
                                                <img src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" class="img-fluid mb-3" id="category-img-tag" width="200px" /> 
                                                </div>
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
                                            <label>Deskripsi Hadiah</label>
										    <textarea class="form-control" name="content" id='content' rows="8"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-md btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{ route('PPgifts.index') }}" class="btn btn-md btn-secondary">Back</a>
                                            </div>
                                        </form>                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                <script>
                    function previewImage(){
                       const image = document.querySelector('#image');
                       const imgPreview = document.querySelector('.image-preview'); 

                       imgPreview.style.display= 'block';

                       const oFReader = new FileReader();
                       oFReader.readAsDataURL(image.files[0]);
                       oFReader.onload = function(ofREvent){
                        imgPreview.src = ofREvent.target.result;
                       }
                    }
                </script>                      

            @include('footer')