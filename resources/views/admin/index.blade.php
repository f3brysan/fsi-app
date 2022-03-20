@include('admin/navbar')
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
                                    <h4 class="mb-sm-0">Beranda</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>                                           
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        {{-- TABS FOTO --}}
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <img class="card-img-top img-fluid" width="100px" src="assets/images/users/avatar-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Profil Bikers</h4>
                                        <p class="card-text">Nama : Heri Mulyanto <br>
                                        Asal Komunitas : Honda Supra Jakarta</p> 
                                        <p>No ID FSI : FSI00007798</p>                                      
                                        <ul class="social-links list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a role="button" class="text-reset" title="Facebook" data-bs-placement="top" data-bs-toggle="tooltip" class="tooltips" href=""><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a role="button" class="text-reset" title="Twitter" data-bs-placement="top" data-bs-toggle="tooltip" class="tooltips" href=""><i class=" fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a role="button" class="text-reset" title="1234567890" data-bs-placement="top" data-bs-toggle="tooltip" class="tooltips" href=""><i class="fas fa-phone-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a role="button" class="text-reset" title="@skypename" data-bs-placement="top" data-bs-toggle="tooltip" class="tooltips" href=""><i class="fab fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- TABS PROFILE --}}
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Profil Biker</h4>                                        
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#profil" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                                    <span class="d-none d-sm-block"><i class="fas fa-user"></i> Profil</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                                    <span class="d-block d-sm-none"><i class=" fas fa-flag"></i></span>
                                                    <span class="d-none d-sm-block"><i class=" fas fa-flag"></i> Asal Komunitas</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-motorcycle"></i></span>
                                                    <span class="d-none d-sm-block"><i class="fas fa-motorcycle"></i> Profil Kendaraan</span>   
                                                </a>
                                            </li>                                            
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" id="home1" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="profile1" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="messages1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free carles.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="settings1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade keffiyeh craft.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Perolehan Poin</p>
                                                <h4 class="mb-2">220 Poin</h4>
                                                <a href=""><p class="text-muted mb-0">Lihat histori poin <i class="text-success fas fafas fa-arrow-right"></i></p></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-dark rounded-3">
                                                    <i class="ri-copper-coin-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
                <!-- End Page-content -->
                
                @include('admin/footer')