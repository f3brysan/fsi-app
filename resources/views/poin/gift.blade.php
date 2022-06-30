@include('navbar')

<style>
    .events {
        height: 300px;
        display: flex;
        justify-content: center;

    }

    .events img {
        width: 90%;
        margin: auto;
        display: block;
    }
</style>

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Hadiah</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item"> Poinku</li>
                                            <li class="breadcrumb-item active"> Hadiah</li>
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

                        <div class="row">
                            <h4>Redeem</h4>

                            {{-- Event Items --}}
                            @if ($gifts)
                                @foreach ($gifts as $gift)
                                <div class="col-md-6 col-xl-3">                               
                                    <div class="card">
                                        <img class="card-img-top img-fluid events" src="{{ asset('storage/'.$gift->picture) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $gift->nama }}</h4> 
                                            <p> <strong>Poin yang dibutuhkan : {{ $gift->price }} Poin</strong> </p> 
                                            <p class="text-muted">Tersedia : <strong>{{ $gift->total }} pcs</strong></p>
                                            <p class="text-muted">{!! $gift->content !!}</p>                                           
                                            @if ($poin >= $gift->price)
                                            <a href="" class="btn btn-primary waves-effect waves-light d-grid">Redeem</a>  
                                            @else
                                            <a href="" class="btn btn-secondary waves-effect waves-light d-grid disabled">Poin belum cukup</a>   
                                            @endif                                  
                                            
                                        </div>
                                    </div>
                                </div><!-- end col -->     
                                @endforeach
                            @else
                                Belum Ada Event Terdekat
                            @endif
                            
                            {{-- end event items --}}
                            
                        </div> {{-- end row --}}

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@include('footer')