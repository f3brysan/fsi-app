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
                            <div class="col-md-4">
                                <div id="reader" width="600px"></div>
                            </div>
                            <div class="col-md-4">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                                @endif
                                <form action="{{ route('attendant.acc') }}" method="POST">
                                    @csrf
                                <div>
                                    <label for="">ID Peserta</label>
                                    <input type="text" id="result" name="result">
                                    <input type="hidden" value="{{ $event->uuid }}" name="event_uuid">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary d-grid">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        

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
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>                
                <!-- End Page-content -->    
                                      

            @include('footer')
            <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
            <script>
                function onScanSuccess(decodedText, decodedResult) {
                // handle the scanned code as you like, for example:
                // console.log(`Code matched = ${decodedText}`, decodedResult);
                $("#result").val(decodedText)
                }

                function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10, qrbox: {width: 250, height: 250} },
                /* verbose= */ false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                html5QrCode.stop().then((ignore) => {
                // QR Code scanning is stopped.
                }).catch((err) => {
                // Stop failed, handle it.
                });
            </script>