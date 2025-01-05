@use(App\Models\User)
<!-- Left Sidebar Start -->
<div class="app-sidebar-menu" style="background-color: #90CBC1; height: 100%; color: #ffffff;">
    <div class="h-100" data-simplebar>
        

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="/dashboard" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/src/images/kogo bidan.jpg') }}" alt="" style="border-radius: 50%; object-fit: cover; width: 22px; height: 22px;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/src/images/kogo bidan.jpg') }}" alt="" style="border-radius: 50%; object-fit: cover; width: 50px; height: 50px;">
                    </span>
                </a>
                <a href="/dashboard" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/src/images/kogo bidan.jpg') }}" alt="" style="border-radius: 50%; object-fit: cover; width: 22px; height: 22px;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/src/images/kogo bidan.jpg') }}" alt="" style="border-radius: 50%; object-fit: cover; width: 50px; height: 50px;">
                    </span>
                </a>
            </div>
            

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="/dashboard" class="nav-link">
                        <i class="fa-solid fa-gauge" style="color: #c81498;"></i>
                        <span> Konsultasi </span>
                    </a>
                </li>
                

                @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN && Request::is('dashboard*'))
                        <li>
                            <a href="/dashboard/prodi" class="nav-link">
                                <i class="fa-solid fa-user" style="color: #c81498;"></i>
                                <span> Pencatatan Kesehatan </span>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/mahasiswa" class="nav-link">
                                <i class="fa-solid fa-calendar-days" style="color: #c81498;"></i>
                                <span> Komunitas
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('datapengguna.index') }}" class="nav-link">
                                <i class="fa-solid fa-clipboard" style="color: #c81498;"></i>
                                <span> Daftar Pengguna </span>
                            </a>
                        </li>
                        
                                <a href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket" style="color: #c81498;"></i>
                                <span>Logout</span>
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                        </li>
                        <!--Dosen = Pengguna -->
                    @elseif (Auth::user()->role == User::ROLE_DOSEN)
                    <li>
                        <a href="/dashboard/prodi" class="nav-link">
                            <i class="fa-solid fa-user" style="color: #c81498;"></i>
                            <span> Home </span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/prodi" class="nav-link">
                            <i class="fa-solid fa-user" style="color: #c81498;"></i>
                            <span> Pencatatan Kesehatan </span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/dosen" class="nav-link">
                            <i class="fa-solid fa-calendar-days" style="color: #c81498;"></i>
                            <span> Pencatatan Kesehatan
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/mahasiswa" class="nav-link">
                            <i class="fa-solid fa-clipboard" style="color: #c81498;"></i>
                            <span> Komunitas </span>
                        </a>
                    </li>
                    <li>
                            <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket" style="color: #c81498;"></i>
                            <span>Logout</span>
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                        </li>
                        <!--Mahasiswa = Tenaga Medis -->
                    @elseif (Auth::user()->role == User::ROLE_MAHASISWA)
                    <li>
                        <a href="/dashboard/kesehatan" class="nav-link">
                            <i class="fa-solid fa-user" style="color: #c81498;"></i>
                            <span> Pencatatan Kesehatan </span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/mahasiswa" class="nav-link">
                            <i class="fa-solid fa-calendar-days" style="color: #c81498;"></i>
                            <span> Komunitas
                            </span>
                        </a>
                    </li>
                    <li>
                            <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket" style="color: #c81498;"></i>
                            <span>Logout</span>
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </li>
                    @endif
                @endauth
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->
