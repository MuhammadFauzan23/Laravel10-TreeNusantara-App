@section('menu_sidebar')
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../template/dist/img/user2-160x160.jpg" class="img-circle elevation-2 mt-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block"><b>{{ Auth::user()->name }}</b></a>
                <a class="d-block">{{ Auth::user()->role }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ '/home' }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role == 'administrator')
                    <li class="nav-item">
                        <a href="{{ '/list_kategori' }}" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>
                                Kategori
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_users/' }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_artikel' }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Artikel
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_playlist' }}" class="nav-link">
                            <i class="nav-icon fas fa-video"></i>
                            <p>
                                Playlist Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_materi' }}" class="nav-link">
                            <i class="nav-icon fas fa-film"></i>
                            <p>
                                Materi Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_slide_banner' }}" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-bars"></i>
                            <p>
                                Slide Banner
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/list_iklan' }}" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-audio-description"></i>
                            <p>
                                Iklan
                            </p>
                        </a>
                    </li>
                @elseif (Auth::user()->role == 'kasir')
                @endif
                <li class="nav-item">
                    <a href="{{ '/user_setting' }}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            User Setting
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
@endsection
