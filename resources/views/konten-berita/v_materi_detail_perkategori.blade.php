@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    @foreach ($data_materi as $materi)
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-2">
                    <img class="" alt="Generic placeholder image" src="{{ asset('uploads/' . $materi->gambar_materi) }}"
                        width="100%" height="100%">
                </div>
                <style>
                    .iklan {
                        text-align: center;
                    }
                </style>
                <div class="col-lg-4 mt-2">
                    <div class="bd-example iklan">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($data_iklan as $iklan)
                                    <li data-target=".carouselExampleCaptions" data-slide-to="{{ $loop->index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($data_iklan as $iklan)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <a href="{{ $iklan->link }}"><img
                                                src="{{ is_null($iklan->gambar_iklan) ? 'Gambar tidak tersedia' : asset('uploads/' . $iklan->gambar_iklan) }}"
                                                class="d-block w-100" alt="..." height="270px" width="100%"> </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href=".carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0"><b>Trenusantara</b> adalah sebuah platform digital teruntuk Gen-Z yang menjadi
                            sumber
                            informasi terpercaya dan aktual serta renyah dalam hal pencerdasan kehidupan berbangsa dan
                            bernegara
                            sebagaimana yang telah diamanatkan dalam konstitusi Republik Indonesia. .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <hr>
                    <h3>{{ $materi->judul_materi }}</h3>
                    <span class="badge badge-warning">{{ $materi->judul_playlist }}</span>
                    <span class="badge badge-success">{{ $materi->name }}</span>
                    <span class="badge badge-primary">{{ date('l, d F Y', strtotime($materi->created_at)) }}</span>
                    <div class="row mt-1">
                        <div class="col-lg-12 konten">
                        </div>
                    </div>
                    <script>
                        let htmlString = @json($materi->deskripsi_materi);
                        const stringToHTML = htmlString => {
                            const parser = new DOMParser();
                            const html = parser.parseFromString(htmlString, 'text/html');

                            return html.body;
                        }
                        // const body = stringToHTML(htmlString);
                        // convert = document.body.appendChild(body);
                        const collection = document.getElementsByClassName("konten");
                        collection[0].innerHTML = htmlString;
                    </script>
                    <hr>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $materi->link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="p-3">
                        <h4 class="font-italic">Materi terkait</h4>
                        <hr>
                        @foreach ($post_related as $post)
                            <a style="color: black">
                                <div class="media">
                                    <img src="{{ asset('uploads/' . $post->gambar_materi) }}" width="160px" height="100px"
                                        class="align-self-start mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0"><b>{{ $post->judul_materi }}</b></h5>
                                        <span class="badge badge-warning">{{ $materi->judul_playlist }}</span>
                                        <span class="badge badge-success">{{ $materi->name }}</span>
                                        <a
                                            href="{{ url('/view_materi_detail_perkategori/' . $materi->playlist_id . '/' . $post->id) }}"><i
                                                class="fas fa-anwser">
                                                <span class="badge badge-primary">Selengkapnya... </span></i></a>
                                    </div>
                                </div>
                                <hr>
                            </a>
                        @endforeach
                    </div>
                </div>
                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3">
                        <h4 class="font-italic">Playlist</h4>
                        @foreach ($data_playlist as $playlist)
                            <div class="row">
                                <div class="col-md-8">
                                    <ol class="list-unstyled mb-0">
                                        <li><a
                                                href="{{ url('/view_materi_per_kategori/' . $playlist->id) }}">{{ $playlist->judul_playlist }}</a>
                                        </li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    {{--  --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="bd-example iklan">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($data_banner as $slide)
                                    <li data-target=".carouselExampleCaptions" data-slide-to="{{ $loop->index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($data_banner as $slide)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <a href="{{ $slide->link }}"><img
                                                src="{{ is_null($slide->gambar_slide) ? 'Gambar tidak tersedia' : asset('uploads/' . $slide->gambar_slide) }}"
                                                class="d-block w-100" alt="..." height="50%" width="50%"> </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href=".carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div>
        </div>
    @endforeach
@endsection
