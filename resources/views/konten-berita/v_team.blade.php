@extends('layout.landing_page')
@extends('layout.navbar')
@section('content')
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row">
                @foreach ($data_users as $du)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('uploads/' . $du->gambar_user) }}" class="img-fluid" alt=""
                                    width="100%" height="100%">
                                <div class="social">
                                    <a href="{{ $du->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $du->facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $du->instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $du->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                    <a href="{{ $du->tiktok }}"><i class="bi bi-tiktok"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $du->name }}</h4>
                                <span>{{ $du->jabatan }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
