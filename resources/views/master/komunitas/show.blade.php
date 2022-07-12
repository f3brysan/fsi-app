@include('navbar')

<style>
    .logo {
        height: 150px;
        display: flex;
        justify-content: center;

    }

    .img-center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        
    }
</style>
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
                                    <h4 class="mb-sm-0">Detil Data {{ $komunitas->nama }}</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">                                            
                                            <li class="breadcrumb-item"><a href="{{ route('PPkomunitas.index') }}">Data Komunitas</a></li>
                                            <li class="breadcrumb-item active">Detil Data {{ $komunitas->nama }}</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Detil Data {{ $komunitas->nama }} ({{ $komunitas->singkatan }})</h4>

                                <div class="card">
                                    <div class="post-thumb thumb">
                                        <img class="img-fluid img-center" src="{{ asset('storage/'.$komunitas->picture) }}" alt="{{ $komunitas->slug }}">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Berdiri pada : {{ date('d F Y', strtotime($komunitas->tgl_berdiri))}}<br>
                                        Regional : {{ $komunitas->regional->nama }}<br>
                                        {!! $komunitas->content !!}</p>
                                    </div>
                                </div>

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
                                                <h4 class="card-title">Data Anggota {{ $komunitas->nama }}</h4>                                                                               
                                        <table id="datatable_wrapper" class="table table-responsive">
                                            <thead>
                                            <tr>                                                                                       
                                                <th>Nama Anggota</th>
                                                <th>Panggilan</th>                                                                                     
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>                                               
                                                @foreach ($anggota as $get)  
                                            <tr>                                                                                              
                                                <td><a href="">{{ $get->biodata->fullname }} </a></td> 
                                                <td>{{ $get->biodata->nickname }}</td>                                               
                                                <td><a class="btn btn-sm btn-primary" id="#myModal" data-bs-toggle="modal" data-bs-target="#myModal{{ $get->biodata->uuid }}"><i class="ri-eye-fill"></i> Lihat</a>                                                     
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('PPkomunitas.destroy', $get->uuid) }}" method="POST" class="d-inline">                                            
                                            @method('DELETE')
                                            @csrf                                            
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-2-line"></i> Hapus</button>
                                        </form>
                                                </td>
                                            </tr>                                                                            
                                            @endforeach
                                            </tbody>
                                        </table>     
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->  
                
                @if ($anggota)
@foreach ($anggota as $anggota)
</div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->
<!-- sample modal content -->
<div id="myModal{{ $anggota->biodata->uuid }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Detil {{ $anggota->biodata->fullname }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="{{ asset('storage/'.$anggota->biodata->picture) }}" alt="Card image cap">
            <div class="card-body">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Nama Lengkap:</td>
                        <td>{{ $anggota->biodata->fullname }}</td>
                      </tr>
                      <tr>
                        <td>Nama Panggilan:</td>
                        <td>{{ $anggota->biodata->nickname }}</td>
                      </tr>
                      <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>{{ $anggota->biodata->birth_place }},  {{ $anggota->biodata->birth_day  }}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Jenis Kelamin dan Golongan Darah</td>
                        <td>{{ $anggota->biodata->gender }} | Gol Darah {{ $anggota->biodata->blood }}</td>
                      </tr>
                        <tr>
                        <td>Domisili </td>
                        <td>{{ $anggota->biodata->domisili }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{ Str::mask($anggota->biodata->user->email, '*', 3, 10); }}</td>
                      </tr>
                        <td>Phone Number</td>
                        <td>{{ Str::mask($get->biodata->no_hp, '*', 3, 6); }}</td>
                      </tr>
                    </tr>
                    <td>No SIM</td>
                    <td>{{ Str::mask($anggota->biodata->no_sim, '*', 3, 10) }}</td>
                  </tr>
                    </tr>
                    <td>Jenis Kendaraan</td>
                    <td>{{ $anggota->biodata->motor->jenis_motor }}</td>
                  </tr>
                </tr>
                <td>No Rangka Kendaraan</td>
                <td>{{ Str::mask($anggota->biodata->no_rangka, '*', 3, 12)  }}</td>
              </tr>
            </tr>
            <td>No Mesin Kendaraan</td>
            <td>{{ Str::mask($anggota->biodata->no_mesin, '*', 3, 12)  }}</td>
          </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="modal-footer">       
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endforeach
@endif
                                      

            @include('footer')