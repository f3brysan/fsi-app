@extends('layouts.main')

@section('title', 'Dashboard')

@push('css-custom')
<style>
    .events {
        height: 300px;
        display: flex;
        justify-content: center;
        overflow:hidden;

    }

    .events img {
        width: 90%;
        margin: auto;
        display: block;
        overflow:hidden;
    }
</style>
@endpush

@section('container')

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
                                    <h4 class="mb-2">{{ $poin }} Poin</h4>
                                    <a href="/poinku">
                                        <p class="text-muted mb-0">Lihat histori poin <i
                                                class="text-success fas fafas fa-arrow-right"></i></p>
                                    </a>
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
                {{-- End Widget Poin --}}

                <div class="col-md-6">
                    <h4>Profil</h4>
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-2">
                                <div class="px-2">
                                    @if($biodata->picture)
                                        <img class="card-img avatar-lg"
                                            src="{{ asset('storage/'. $biodata->picture) }}"
                                            alt="{{ $biodata->fullname }}">
                                    @else
                                        <img class="card-img avatar-lg" src="assets/images/users/avatar-1.jpg"
                                            alt="Card image">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $biodata->fullname }} ({{ $biodata->nickname }})</h5>
                                    <p class="card-text">@if ($komunitas)
                                        {{ $komunitas->nama }} ({{ $komunitas->singkatan }})
                                        @if($komunitas->is_approve == 0):
                                        <span class="badge badge-soft-danger">Belum Terverfikasi</span>
                                    @else
                                        <span class="badge badge-soft-info">Member</span>
                                        @endif
                                        @else
                                        Belum Tergabung
                                    @endif  
                                      </p>
                                        <a class="btn btn-link" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"">
                                            <p class="text-muted mb-0">QRCode Saya <span
                                                    class="fas fafas fa-arrow-right"></span></p>
                                        </a>
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
                                    @if($events)
                                        @foreach($events as $event)
                                            <div class="item-px-2">
                                                <article class="post clearfix mb-sm-30">
                                                    <div class="entry-header">
                                                        <div class="post-thumb thumb events"> <img
                                                                src="{{ asset('storage/'.$event->picture) }}"
                                                                alt="{{ $event->slug }}" class="img-fluid"> </div>
                                                        <div class="entry-content bg-white border-1px p-20">
                                                            <br>
                                                            <h5 class="entry-title mt-0 pt-0"><a
                                                                    href="{{ route('event.show',$event->slug) }}">{{ $event->nama }}</a>
                                                            </h5>
                                                            <p class="text-muted">Penyelenggara :
                                                                {{ $event->komunitas->nama }}<br>
                                                                Tanggal :
                                                                {{ date('d-m-Y', strtotime($event->its_start)).' - '.date('d-m-Y', strtotime($event->its_end)) }}
                                                            </p>
                                                            <hr>
                                                </article>
                                            </div>
                                        @endforeach
                                    @else
                                        <h4>Belum Ada Event Terdekat</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">QrCode Saya</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if ($biodata)
                            <div class="events"> {!! QrCode::size(300)->generate($biodata->uuid) !!}</div>
                            @endif
                        </div>
                        @if ($komunitas)
                             <p style="text-align:center">No FSI ID Saya : <strong>{{ $komunitas->fsi_id }}</strong></p>
                            @endif
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

@push('js-custom')

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({    
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
});
</script>
@endpush