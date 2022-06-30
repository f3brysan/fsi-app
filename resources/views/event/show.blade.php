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
                                    <h4 class="mb-sm-0">Event</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('event.index') }}"> Event</a></li>                                            
                                            <li class="breadcrumb-item active">Detil {{ $event->nama }}</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">                                
                                <div class="row">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $event->nama }}</h3> 
                                        <h6 class="card-subtitle font-14 text-muted">Penyelenggara : {{ $event->komunitas->nama }}</h6>                                      
                                    </div>
                                    <img class="img-fluid" src="{{ asset('storage/'.$event->picture) }}" alt="{{ $event->picture }}">
                                    <div class="card-body">
                                        <h6 class="card-subtitle font-14 text-muted">{{ date('d M Y', strtotime($event->its_start)).' - '.date('d M Y', strtotime($event->its_end)) }}</h6>   
                                        <p class="card-text">{!! $event->content !!}</p>
                                        @if($attendant)
                                        <a href="#" class="btn btn-danger d-grid disabled" ></i> Wes Registras Su !</a> 
                                        @elseif ($event->its_start <= now() && $event->its_end >= now())
                                        <form action="{{ route('attendant.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="event_uuid" value="{{ $event->uuid }}">
                                            <input type="hidden" name="biodata_uuid" value="{{ $biodata->uuid }}">
                                            <input type="hidden" name="slug" value="{{ $event->slug }}">
                                            <input type="hidden" name="point" value="{{ $event->poin }}">
                                            <button type="submit" class="d-grid btn btn-primary">
                                                Gabung
                                            </button>
                                        </form>                                         
                                        @else
                                        <a href="#" class="btn btn-danger d-grid disabled" ><i class="fas fa-window-close"></i> Tutup</a> 
                                        @endif                             
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                                      

            @include('footer')