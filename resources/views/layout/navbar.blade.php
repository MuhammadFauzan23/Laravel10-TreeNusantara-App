@section('navbar')
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ '/' }}" class="logo"><img style="border-radius: 5px;" src="../../asset/logo/logo-footer.PNG"
                    alt="Fauzan Image" width="100%" height="100%"></a>
            {{-- <a href="{{ '/' }}" class="logo"><img src="../assets/img/logo-web.png" alt="" width="130%"
                    height="150%"></a> --}}
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="{{ '/' }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown">
                                <a href="#"><span>Artikel</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($data_kategori as $kategori)
                                        <li><a
                                                href="{{ url('/view_artikel_per_kategori/' . $kategori->id) }}">{{ $kategori->nama_kategori }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#"><span>Playlist</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($data_playlist as $playlist)
                                        <li><a
                                                href="{{ url('/view_materi_per_kategori/' . $playlist->id) }}">{{ $playlist->judul_playlist }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a class="nav-link" href="{{ '/view_about' }}">About us</a></li>
                    <li><a class="nav-link" href="{{ '/view_service' }}">Services</a></li>
                    <li><a class="nav-link" href="{{ '/view_teams' }}">Teams</a></li>
                    <li><a class="nav-link" href="{{ '/view_contact' }}">Contact</a></li> --}}
                    <li><a class="nav-link" href="{{ '/login_page' }}">Log in</a></li>
                </ul>
                <i class=" bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
@endsection
