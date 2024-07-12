  <!-- Topbar Start -->
  <div class="topbar-custom">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            <li>
                                <button class="button-toggle-menu nav-link">
                                    <i data-feather="menu" class="noti-icon"></i>
                                </button>
                            </li>
                            <li class="d-none d-lg-block">
                                <div class="position-relative topbar-search">
                                    <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                                    <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i data-feather="bell" class="noti-icon"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
        
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>
        
                                    <div class="noti-scroll" data-simplebar>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                            <div class="notify-icon">
                                                <img src="{{ asset('admin/dist/assets/images/users/user-12.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Ahmad Fauzi</p>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Pengingat <span class="text-reset">"Anda memiliki pesan baru dari mahasiswa bimbingan Anda, Ahmad. Silakan periksa kotak masuk Anda untuk membaca pesan tersebut dan memberikan tanggapan. Pastikan Anda merespon sebelum tanggal 20 Juli 2024 untuk memastikan proses bimbingan berjalan lancar. Terima kasih."</span></small>
                                            </p>
                                        </a>
                                        <!-- Item End -->

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                            <div class="notify-icon">
                                                <img src="{{ asset('admin/dist/assets/images/users/user-14.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Siti Nurhaliza</p>
                                                <small class="text-muted">10 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Pengingat <span class="text-reset">"Anda memiliki jadwal bimbingan dengan mahasiswa, Siti Nurhaliza, pada tanggal 15 Juli 2024 pukul 10:00 WIB. Mohon pastikan Anda hadir tepat waktu untuk membantu kelancaran proses bimbingan akademik."</span></small>
                                            </p>
                                        </a>
                                        <!-- Item End -->

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                            <div class="notify-icon">
                                                <img src="{{ asset('admin/dist/assets/images/users/user-13.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Budi Santoso</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">"Mahasiswa bimbingan Anda, Budi Santoso, telah mengunggah laporan tugas akhir untuk direview. Silakan periksa dan berikan feedback melalui portal bimbingan sebelum tanggal 25 Juli 2024 untuk mendukung kemajuan akademik mahasiswa."</span></small>
                                            </p>
                                        </a>
                                        <!-- Item End -->
                                    </div>
        
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fe-arrow-right"></i>
                                    </a>
        
                                </div>
                            </li>
        
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admin/dist/assets/images/users/user-11.jpg') }}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1">
                                    {{ Auth::user()->name ?? '' }} <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
        
                                    <div class="dropdown-divider"></div>
        
                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->