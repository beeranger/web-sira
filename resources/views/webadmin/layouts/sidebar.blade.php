<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Akun</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('webadmin.home') }}" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard </span>
                        {{-- <span class="badge rounded-pill bg-info ms-auto mr-3">3</span> --}}
                    </a>                    
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('webadmin.users-list') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">User</span></a></li>
                
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Konten Tag</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('webadmin.tag-category') }}" aria-expanded="false"><i class="mdi mdi-tag"></i><span class="hide-menu">Kategori</span></a></li>

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Web Konten</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('webadmin.posts') }}" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">List Berita</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('webadmin.galeri-list') }}" aria-expanded="false"><i class="mdi mdi-image-multiple"></i><span class="hide-menu">Galeri</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('webadmin.unit-sekolah') }}" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu">Unit Sekolah</span></a></li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Contact</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">PPDB</span></a></li> --}}
                               
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>