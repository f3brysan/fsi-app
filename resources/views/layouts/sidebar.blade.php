 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/home" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('event.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Agenda</span>
                    </a>
                </li>

                <li>
                    <a href="/poinku" class=" waves-effect">
                        <i class="ri-copper-coin-line"></i>
                        <span>Pointku</span>
                    </a>
                </li>
    
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Pointku</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                    </ul>
                </li> --}}

                <li class="menu-title">Dokumemn Penting</li>

                <li>
                    <a href="/adart">
                        <i class="ri-file-line"></i>
                        <span>AD/ART</span>
                    </a>                                
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-copy-2-line"></i>
                        <span>Laporan</span>
                    </a>                  
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">KAS Pusat</a></li>
                        <li><a href="email-read.html">KAS Regional</a></li>
                    </ul>              
                </li>                            

                @can('MasterData')
                <li class="menu-title">Master Data</li>
                <li>
                    <a href="{{ route('PPregionals.index') }}" >
                        <i class="ri-database-2-line"></i>
                        <span>Data Regional</span>
                    </a>                                
                </li>

                <li>
                    <a href="{{ route('PPkomunitas.index') }}" >
                        <i class="ri-database-line"></i>
                        <span>Data Komunitas</span>
                    </a>                                
                </li>

                <li>
                    <a href="{{ route('PPanggotas.index') }}" >
                        <i class="ri-team-line"></i>
                        <span>Data Anggota</span>
                    </a>                                
                </li>

                <li>
                    <a href="{{ route('PPevents.index') }}" >
                        <i class="ri-map-pin-4-fill"></i>
                        <span>Data Event</span>
                    </a>                                
                </li>

                <li>
                    <a href="{{ route('PPgifts.index') }}" >
                        <i class="ri-gift-fill"></i>
                        <span>Data Hadiah</span>
                    </a>                                
                </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->