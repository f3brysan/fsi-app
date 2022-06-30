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
                                    <h4 class="mb-sm-0">Poinku</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item active">Poinku</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                                <h4>Poinku</h4>
                              <div class="card">
                                  <div class="card-body">
                                      <div class="d-flex">
                                          <div class="flex-grow-1">
                                              <p class="text-truncate font-size-14 mb-2">Perolehan Poin</p>
                                              <h4 class="mb-2">{{ $poin }} Poin</h4>
                                              <a href=""><p class="text-muted mb-0">Redeem <i class="text-success fas fafas fa-arrow-right"></i></p></a>
                                          </div>
                                          <div class="avatar-sm">
                                              <span class="avatar-title bg-light text-dark rounded-3">
                                                  <i class="ri-copper-coin-line font-size-24"></i>  
                                              </span>
                                          </div>
                                      </div>                                              
                                  </div><!-- end cardbody -->
                              </div><!-- end card -->
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h4>Histori Perolehan Poin</h4>
                                <div class="card">
                                    <div class="card-body">
                                        @if ($events)
                                          @foreach ($events as $event)
                                          <section id="cd-timeline" class="cd-container">
                                            <div class="cd-timeline-block">
                                                <div class="cd-timeline-img cd-success">
                                                    <i class="mdi mdi-adjust"></i>
                                                </div> <!-- cd-timeline-img -->
        
                                                <div class="cd-timeline-content">
                                                    <h3>{{ $event->point }} Poin</h3>
                                                    <p class="mb-0 text-muted font-14">{{ $event->event->nama }}</p>
                                                    <span class="cd-date">{{ date('d F Y', strtotime($event->updated_at)) }}</span>
                                                </div> <!-- cd-timeline-content -->
                                            </div> <!-- cd-timeline-block -->
                                        </section> <!-- cd-timeline -->  
                                          @endforeach  
                                          @else
                                          <h5>Belum ada poin yang diperoleh.</h5>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@include('footer')                