@include('admin.biodata.navbar')
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
                                    <h4 class="mb-sm-0">Biodata</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/home"> Beranda</a></li>                                            
                                            <li class="breadcrumb-item active">Detil Biodata</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-12">
                                <h4>Biodata Anggota</h4>
                                <div class="row">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Data Anggota</h4>                                        

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-biodata" role="tab" aria-controls="v-pills-home" aria-selected="true">Profil Diri</a>
                                                <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-komunitas" role="tab" aria-controls="v-pills-profile" aria-selected="false">Asal Komunitas</a>
                                            </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-biodata" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="px-2">
                                                            @if ($biodata->picture)
                                                            <img class="card-img avatar-lg" src="{{ asset('storage/'. $biodata->picture) }}" alt="{{ $biodata->fullname }}">   
                                                            @else
                                                            <img class="card-img avatar-lg" src="assets/images/users/avatar-1.jpg" alt="Card image"> 
                                                            @endif                                        
                                                          </div>
                                                        <table class="table">
                                                            <tbody>
                                                              <tr>
                                                                <td>Nama Lengkap:</td>
                                                                <td>{{ $biodata->fullname }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Nama Panggilan:</td>
                                                                <td>{{ $biodata->nickname }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Tempat, Tanggal Lahir</td>
                                                                <td>{{ $biodata->birth_place }},  {{ $biodata->birth_day  }}</td>
                                                              </tr>
                                                           
                                                                 <tr>
                                                                     <tr>
                                                                <td>Jenis Kelamin dan Golongan Darah</td>
                                                                <td>{{ $biodata->gender }} | Gol Darah {{ $biodata->blood }}</td>
                                                              </tr>
                                                                <tr>
                                                                <td>Domisili </td>
                                                                <td>{{ $biodata->domisili }}, {{ $biodata->kota }}, {{ $biodata->provinsi }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Email</td>
                                                                <td>{{ $biodata->email }}</td>
                                                              </tr>
                                                                <td>Phone Number</td>
                                                                <td>{{ $biodata->no_hp }}</td>
                                                              </tr>
                                                            </tr>
                                                            <td>No SIM</td>
                                                            <td>{{ $biodata->no_sim }}</td>
                                                          </tr>
                                                            </tr>
                                                            <td>Jenis Kendaraan</td>
                                                            <td>{{ $biodata->jenis_motor }}</td>
                                                          </tr>
                                                        </tr>
                                                        <td>No Rangka Kendaraan</td>
                                                        <td>{{ $biodata->no_rangka }}</td>
                                                      </tr>
                                                    </tr>
                                                    <td>No Mesin Kendaraan</td>
                                                    <td>{{ $biodata->no_mesin }}</td>
                                                  </tr>
                                                            </tbody>
                                                          </table>
                                                          <div class="card-body">
                                                            <a href="{{ route('biodata.edit',$parr) }}" class="card-link">Edit</a>                         
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-komunitas" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                       @if ($komunitas)
                                                       <table class="table">
                                                        <tbody>
                                                          <tr>
                                                            <td>Nama Komunitas:</td>
                                                            <td>{{ $komunitas->nama }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Singkatan Komunitas:</td>
                                                            <td>{{ $komunitas->singkatan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Status</td>
                                                            <td>@if ($komunitas->is_approve == 0)
                                                               <span class="badge badge-soft-danger">Belum Terverfikasi</span>
                                                            @else
                                                                <span class="badge badge-soft-info">Member</span>
                                                            @endif</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                       @else
                                                           <strong>Anda Belum Tergabung dalam Komunitas </strong>
                                                           <br><br>
                                                           <div class="d-grid"><a href="{{ route('anggotakomunitas.create') }}" class="btn btn-default">Gabung Komunitas</a></div>
                                                           
                                                       @endif
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        <p>
                                                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                            farm-to-table readymade. Messenger bag gentrify pitchfork
                                                            tattooed craft beer, iphone skateboard locavore carles etsy
                                                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                            Leggings gentrify squid 8-bit cred.
                                                        </p>
                                                        <p class="mb-0">DIY synth PBR banksy irony.
                                                                Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                                mi whatever gluten-free.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                        <p>
                                                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                            art party before they sold out master cleanse gluten-free squid
                                                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                            art party locavore wolf cliche high life echo park Austin. Cred
                                                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                            farm-to-table.
                                                        </p>
                                                        <p class="mb-0">Fanny pack portland seitan DIY,
                                                            art party locavore wolf cliche high life echo park Austin. Cred
                                                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                            farm-to-table.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->    
                                      

            @include('admin.biodata.footer')