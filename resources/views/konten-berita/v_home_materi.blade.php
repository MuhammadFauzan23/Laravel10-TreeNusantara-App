@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="information" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Informasi</h2>
                    <h3>Materi :
                        @foreach ($data_materi_limit as $materi)
                            <span>{{ $materi->judul_playlist }}</span>
                        @endforeach
                    </h3>
                    <p>Beragam jenis informasi yang disajikan.</p>
                </div>
                <style>
                    .kotak {
                        padding: 1cm;
                        color: blue;

                    }
                </style>
                <div class="row">
                    @foreach ($data_materi_no_limit2 as $materi)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card">
                                <img src="{{ asset('uploads/' . $materi->gambar_materi) }}" alt="image"
                                    style="width: 100%; height: 60%;">
                                <div class="card-body">
                                    <b>
                                        <p>{{ $materi->judul_materi }}</p>
                                    </b>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <span class="badge badge-warning">{{ $materi->playlist->judul_playlist }}</span>
                                            <br>
                                            <span class="badge badge-success">{{ $materi->user->name }}</span>

                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="badge badge-primary"><a style="color: black"
                                                    href="{{ url('/view_materi_detail_perkategori/' . $materi->playlist_id . '/' . $materi->id) }}"><i
                                                        class="fas fa-anwser">
                                                        Selengkapnya... </i></a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->
    </main>
    <!-- End Hero -->
@endsection
