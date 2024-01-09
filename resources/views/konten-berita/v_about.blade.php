@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7  content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>TreNusantara News</h3>
                    <p>
                        Trenusantara adalah sebuah platform digital teruntuk Gen-Z yang menjadi sumber informasi terpercaya
                        dan aktual serta renyah dalam hal pencerdasan kehidupan berbangsa dan bernegara sebagaimana yang
                        telah diamanatkan dalam konstitusi Republik Indonesia.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Trenusantara merupakan entitas yang berfokus pada produksi, distribusi, dan konsumsi konten
                                melalui platform digital. Dalam beberapa tahun terakhir, media digital telah mengalami
                                pertumbuhan yang pesat dan memainkan peran yang semakin penting dalam cara kita mengakses
                                informasi dan hiburan.
                                Kemajuan teknologi informasi dan komunikasi, terutama internet dan perangkat mobile, telah
                                memungkinkan lahirnya organisasi media digital. Platform digital seperti situs web, aplikasi
                                mobile, media sosial, dan platform streaming telah memberikan akses yang lebih mudah dan
                                cepat untuk berbagi dan mengonsumsi konten.
                            </p>
                        </div>
                        <div class="col-md-6">
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
                                                        class="d-block w-100" alt="..." height="250px" width="100%">
                                                </a>
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
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2" data-aos="fade-right" data-aos-delay="100">
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
                                                class="d-block w-100" alt="..." height="100%" width="50%"> </a>
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
                </div>
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Trenusantara merupakan entitas yang berfokus pada produksi, distribusi, dan konsumsi konten
                        melalui platform digital. Dalam beberapa tahun terakhir, media digital telah mengalami
                        pertumbuhan yang pesat dan memainkan peran yang semakin penting dalam cara kita mengakses
                        informasi dan hiburan.
                        Kemajuan teknologi informasi dan komunikasi, terutama internet dan perangkat mobile, telah
                        memungkinkan lahirnya organisasi media digital. Platform digital seperti situs web, aplikasi
                        mobile, media sosial, dan platform streaming telah memberikan akses yang lebih mudah dan
                        cepat untuk berbagi dan mengonsumsi konten.
                    </p>
                    <p>
                        Digitalisasi media telah mengubah cara tradisional organisasi media beroperasi. Media digital
                        memungkinkan mereka untuk mencapai audiens yang lebih luas secara global dan menawarkan berbagai
                        format konten seperti teks, gambar, audio, dan video. Hal ini juga mengubah model bisnis dengan
                        munculnya iklan digital, langganan berbayar, dan pendekatan lainnya untuk mendapatkan pendapatan.
                        Salah satu keunggulan media digital adalah kemampuannya untuk menyediakan berita dan informasi
                        secara real-time. Organisasi media digital dapat memberikan berita terbaru dalam hitungan detik dan
                        memungkinkan interaksi langsung dengan audiens melalui komentar, pesan, dan jejaring sosial.
                    </p>
                </div>
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="100">
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
                                                class="d-block w-100" alt="..." height="100%" width="50%">
                                        </a>
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-right" data-aos-delay="100">
                    <p>Media digital memberikan kesempatan kepada pengguna untuk berpartisipasi dan berkontribusi dalam
                        proses produksi dan distribusi konten. Pengguna dapat berbagi komentar, ulasan, dan konten mereka
                        sendiri, serta terlibat dalam diskusi dan perdebatan yang melibatkan berbagai perspektif.
                        Organisasi media digital dapat menggunakan data dan analitik untuk memahami perilaku pengguna
                        mereka. Ini memungkinkan mereka untuk menyajikan konten yang disesuaikan dengan minat dan preferensi
                        individu, meningkatkan pengalaman pengguna, dan mengoptimalkan strategi pemasaran.
                        Organisasi media digital juga menghadapi tantangan unik seperti penyebaran berita palsu, privasi
                        data, dan persaingan yang ketat. Mereka perlu terus beradaptasi dengan perubahan teknologi dan
                        perilaku pengguna, mengembangkan strategi inovatif, dan mempertahankan kepercayaan dan kepuasan
                        audiens mereka.
                        Organisasi media digital berperan penting dalam menyediakan informasi, hiburan, dan platform bagi
                        masyarakat digital saat ini. Latar belakang ini mencerminkan transformasi yang terjadi dalam
                        industri media dan bagaimana teknologi telah mengubah cara kita berinteraksi dengan konten dan satu
                        sama lain di era digital</p>
                </div>
            </div>
    </section><!-- End About Section -->
@endsection
