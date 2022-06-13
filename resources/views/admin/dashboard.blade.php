@include('admin/navbar')

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
                                          <li class="breadcrumb-item">Beranda</li>                                           
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                        <!-- end page title -->

                        
                        <div class="row">
                          {{-- Widget Poin --}}
                          <div class="col-md-4">
                            <h4>Poinku</h4>
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
                          {{-- End Widget Poin  --}}

                          <div class="col-md-6">
                            <h4>Profil</h4>
                            <div class="card">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-md-2">
                                      <div class="px-2">
                                        @if ($biodata->picture)
                                        <img class="card-img avatar-lg" src="{{ asset('storage/'. $biodata->picture) }}" alt="{{ $biodata->fullname }}">   
                                        @else
                                        <img class="card-img avatar-lg" src="assets/images/users/avatar-1.jpg" alt="Card image"> 
                                        @endif                                        
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $biodata->fullname }} ({{ $biodata->nickname }})</h5>
                                            <p class="card-text">Honda Supra Jakarta</p>
                                            <a href="{{ route('biodata.show',$biodata->uuid) }}"><p class="text-muted mb-0">Cek Profil <span class="fas fafas fa-arrow-right"></span></p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>{{-- end row --}}
                          
                          <div class="row">
                            <div class="col-md-12">
                              <h4>Event</h4>
                              <div class="card">
                                <div class="card-body">
                                <div class="owl-carousel owl-theme">
                                  <div class="item px-2">
                                      <article class="post clearfix maxwidth600 mb-sm-30">
                                        <div class="entry-header">
                                          <div class="post-thumb thumb"> <img src="https://thumbs.dreamstime.com/b/vector-old-style-motorcycle-event-poster-old-style-motorcycle-event-poster-126315360.jpg" width="330px" alt="" class="img-responsive"> </div>            
                                        <div class="entry-content bg-white border-1px p-20">
                                            <br>
                                          <h5 class="entry-title mt-0 pt-0"><a href="">Charity Ride Supra</a></h5>                    
                                          <hr>                                                        
                                      </article>
                                    </div>
      
                                    <div class="item px-2">
                                      <article class="post clearfix maxwidth600 mb-sm-30">
                                        <div class="entry-header">
                                          <div class="post-thumb thumb"> <img src="https://thumbs.dreamstime.com/b/vector-old-style-motorcycle-event-poster-old-style-motorcycle-event-poster-126315360.jpg" width="330px" alt="" class="img-responsive"> </div>            
                                        <div class="entry-content bg-white border-1px p-20">
                                            <br>
                                          <h5 class="entry-title mt-0 pt-0"><a href="">Charity Ride Supra</a></h5>                    
                                          <hr>                                                        
                                      </article>
                                    </div>
      
                                    <div class="item px-2">
                                      <article class="post clearfix maxwidth600 mb-sm-30">
                                        <div class="entry-header">
                                          <div class="post-thumb thumb"> <img src="https://thumbs.dreamstime.com/b/vector-old-style-motorcycle-event-poster-old-style-motorcycle-event-poster-126315360.jpg" width="330px" alt="" class="img-responsive"> </div>            
                                        <div class="entry-content bg-white border-1px p-20">
                                            <br>
                                          <h5 class="entry-title mt-0 pt-0"><a href="">Charity Ride Supra</a></h5>                    
                                          <hr>                                                        
                                      </article>
                                    </div>
      
                                    <div class="item px-2">
                                      <article class="post clearfix maxwidth600 mb-sm-30">
                                        <div class="entry-header">
                                          <div class="post-thumb thumb"> <img src="https://thumbs.dreamstime.com/b/vector-old-style-motorcycle-event-poster-old-style-motorcycle-event-poster-126315360.jpg" width="330px" alt="" class="img-responsive"> </div>            
                                        <div class="entry-content bg-white border-1px p-20">
                                            <br>
                                          <h5 class="entry-title mt-0 pt-0"><a href="">Charity Ride Supra</a></h5>                    
                                          <hr>                                                        
                                      </article>
                                    </div>
                                  </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        
                        
                        </div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@include('admin/footer')                