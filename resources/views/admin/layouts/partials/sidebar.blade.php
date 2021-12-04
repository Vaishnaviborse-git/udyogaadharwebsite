<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-dark bg-dark border-end"
     id="navbarVertical">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="position-relative d-none d-lg-flex align-items-center h-24 mb-8 justify-content-center bg-dark px-0 border-bottom border-tint-dark">
            <h1 class="text-white">Veicards</h1>
        </div>
        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown">
                <!-- Toggle -->
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div href="#" class="avatar avatar-sm rounded-3 bg-warning text-white">
                        
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-item">
                        <span class="d-block text-sm text-muted mb-1">Signed in as</span>
                        <span class="d-block text-heading font-semibold">Heather Wright</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" href="{{ route('home') }}">
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>

                

                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.aadharRegs.index') }}">
                        <i class="bi bi-card-list"></i>  Udyam Aadhar Registration
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.GSTRegs.index') }}">
                        <i class="bi bi-card-list"></i> GST Registration
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.updateRegs.index') }}">
                        <i class="bi bi-card-list"></i> Update Registration
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.GEMRegs.index') }}">
                        <i class="bi bi-card-list"></i> GEM Registration
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.printCerts.index') }}">
                        <i class="bi bi-card-list"></i> Print Certificates
                    </a>
                </li>



            </ul>
            
             <!-- Divider -->
             <hr class="navbar-divider my-5 opacity-20">
             <!-- Navigation -->
             <ul class="navbar-nav mb-md-4">
                 <li class="nav-item">
                     <a class="nav-link {{request()->routeIs('admin.settings.index') ? 'active' : ''}}"
                          href="{{route('admin.settings.index')}}">
                         <i class="bi bi-gear"></i> Settings
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">
                         <i class="bi bi-bell"></i> Notifications
                         <span
                             class="badge bg-soft-danger text-danger rounded-pill d-inline-flex align-items-center ms-auto">23</span>
                     </a>
                 </li>
             </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>
            <!-- User (md) -->
           
            <ul class="navbar-nav mb-5">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-square"></i> Account
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="javascript:none"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-left"></i> Logout

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
