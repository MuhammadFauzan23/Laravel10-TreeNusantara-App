<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log in Page</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/logo/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/logo/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/logo/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="../template/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../template/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../template/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../template/login/css/style.css">
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <script src="asset/animasi/js/lottie-player.js"></script>
                    <lottie-player class="text-center" src="asset/animasi/login-page.json" background="transparent"
                        speed="1.2" style="width: auto; height: auto;" loop autoplay></lottie-player>
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="mb-4 text-center">
                                <h4><b>TreeNusantara News</b></h4>
                                <p class="mb-4">Sign in to start your session In App</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $eror)
                                                <li>{{ $eror }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <form action="{{ 'proses_login' }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="Username">Username</label>
                                    <input type="username" class="form-control" value="{{ old('username') }}"
                                        id="username" name="username">

                                </div>
                                <div class="form-group last">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" value="{{ old('password') }}"
                                        id="password" name="password">
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                                    <script>
                                        function myFunction() {
                                            var x = document.getElementById("password");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }
                                    </script>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </form>
                            <p class="d-block text-center my-4 text-muted">Back To Landing Page <span>→</span>
                                <a style="color: black;" href="{{ '/' }}"> <b>Click
                                        Here</b> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../template/login/js/jquery-3.3.1.min.js"></script>
<script src="../template/login/js/popper.min.js"></script>
<script src="../template/login/js/bootstrap.min.js"></script>
<script src="../template/login/js/main.js"></script>
<!-- SweetAlert2 -->
<script src="../template/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php session()->has('message'); ?>
<script type="text/javascript">
    // Alert Hapus Data
    $(function() {
        @if (session()->has('message'))
            @if (session('message')['stts'] == true)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Proses berhasil!',
                    text: "{{ session('message')['msg'] }}",
                    timer: 1500,
                    showClass: {
                        popup: 'animate__animated animate__fadeInUp'
                    },
                    showConfirmButton: false,
                })
            @else
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Terjadi Kesalahan Proses!',
                    text: "{{ session('message')['msg'] }}",
                    timer: 1500,
                    showClass: {
                        popup: 'animate__animated animate__fadeInUp'
                    },
                    showConfirmButton: false,
                })
            @endif
        @endif
    });

    window.setTimeout(function() {
        $('.alert').fadeTo(1500, 0).slideUp(500, function() {
            $(this).remove();
        })
    });
</script>

</html>
