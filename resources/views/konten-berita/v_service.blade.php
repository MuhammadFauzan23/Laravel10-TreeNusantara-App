@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <h3>Programming <span>Language</span></h3>
                <p>Bahasa pemrograman adalah sebuah instruksi standar untuk memerintah komputer agar menjalankan fungsi
                    tertentu. Bahasa Pemrograman yang digunakan diantaranya :</p>
            </div>

            <div class="row">
                <style>
                    .logo-icon {
                        width: 50px;
                        height: 50px;
                    }
                </style>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/php.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">PHP</a></h4>
                        <p>Bahasa scripting open source yang banyak digunakan oleh Web Developer untuk pengembangan Web.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/laravel.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">Framework Laravel</a></h4>
                        <p>framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP
                            dalam pengembangan aplikasi web.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/javascript.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">Javascript</a></h4>
                        <p>Bahasa pemrograman yang digunakan developer untuk membuat halaman web yang interaktif.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/mysql.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">Mysql</a></h4>
                        <p>Sebuah perangkat lunak sistem manajemen basis data SQL atau DBMS.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/css.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">CSS</a></h4>
                        <p>Bahasa sederhana yang digunakan untuk menambahkan gaya/styling (misalnya, font, warna, spasi) ke
                            sebuah halaman website.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img class="logo-icon" src="../asset/logo/html.png" alt="image"
                                srcset=""></i></div>
                        <h4><a href="">HTML</a></h4>
                        <p>Bahasa markup standar untuk membuat dan menyusun halaman dan aplikasi web.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
