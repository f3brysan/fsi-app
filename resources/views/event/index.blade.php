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
        overflow:hidden;
    }
</style>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Agenda</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item active">Agenda</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <h4>Event</h4>

                            {{-- Event Items --}}
                            @if ($events)
                                @foreach ($events as $event)
                                <div class="col-md-6 col-xl-3">                               
                                    <div class="card">
                                        <img class="card-img-top img-fluid events" src="{{ asset('storage/'.$event->picture) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $event->nama }}</h4>  
                                            <p class="text-muted">Pelenggara : {{ $event->komunitas->nama }}</p>                                  
                                            <a href="{{ route('event.show', $event->slug) }}" class="btn btn-primary waves-effect waves-light d-grid">Lihat</a>
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