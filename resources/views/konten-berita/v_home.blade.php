@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="information" class="services">
            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Informasi <span>Terkini</span></h3>
                <p>Beragam jenis informasi terkini yang disajikan.</p>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach ($data_artikel as $artikel)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-2" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card">
                                <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt="image"
                                    style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <b>
                                        <p>{{ $artikel->judul }}</p>
                                    </b>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <span class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</span>
                                            <br>
                                            <span class="badge badge-success">{{ $artikel->user->name }}</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="badge badge-primary"><a style="color: black"
                                                    href="{{ url('/view_artikel_detail/' . $artikel->id) }}"><i
                                                        class="fas fa-anwser"> Selengkapnya... </i></a></span>
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
