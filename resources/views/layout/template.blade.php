<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TreNusantara | {{ $title }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/logo/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/logo/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/logo/logo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../template/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../../template/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="../../template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../template/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../template/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../template/plugins/dropzone/min/dropzone.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="../../template/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../template/dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../../template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css">

    <!-- Date Time Picker Jquery -->
    <link rel="stylesheet" href="../../asset/date/css/jquery.datetimepicker.css">

    {{-- LINK Bizland --}}
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../../template/plugins/jquery/jquery.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="../../template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../template/plugins/jszip/jszip.min.js"></script>
    <script src="../../template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
    {{-- CK EDITOR --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

    <!-- InputMask -->
    <!-- <script src="template/plugins/moment/moment.min.js"></script> -->

    <script src="../../asset/js/node_modules/moment/moment.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Select2 -->
    <script src="../../template/plugins/select2/js/select2.full.min.js"></script>
    <!-- Date time picker -->
    <script src="../../asset/date/js/jquery.datetimepicker.full.js"></script>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->
                <li class="nav-item">
                    <div class="btn-group nav-link">
                        <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon"
                            data-toggle="dropdown">
                            <span>
                                <img style="width:20px;" src="../../template/dist/img/avatar.png"
                                    class="img-circle elevation-2 user-img" alt="User Image">
                            </span>
                            <span class="ml-3">
                                <a>{{ Auth::user()->name }}</a>
                            </span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ '/log_out' }}" class="dropdown-item logout">
                                <span class="fas fa-power-off"></span> Logout
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-success elevation-4">
            <!-- Brand Logo -->
            <a href="#/index3.html" class="brand-link">
                <img src="../../../asset/logo/logo-footer.PNG" width="100%" height="100%" alt="Image"
                    class="brand-image" style="opacity: .8">
                {{-- <span class="brand-text font-weight-dark">TreNusantara News</span> --}}
            </a>
            @include('sweetalert::alert')

            Strzul2022!
            @yield('menu_sidebar')
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: left; color: black;">
                        <i class="far fa-file-alt"> License of<a href="" data-toggle="modal"
                                data-target="#lisensi"> TreNusantara News App </a></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="text-align: right; color: black;">Copyright &copy; 2014-2021 <a
                            href=" https://adminlte.io">AdminLTE.io</a>. All rights reserved.</div>
                </div>
            </div>
        </footer>
        <!-- ./wrapper -->

        {{-- Modal Lisensi --}}
        <div class="modal fade" id="lisensi" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="card card-success">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">TreNusantara News</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4 mt-1"><img style="border-radius: 5px;"
                                        src="../../asset/logo/fauzan.jpg" alt="Fauzan Image" width="100%"
                                        height="100%"></div>
                                <div class="col-lg-8 mt-1">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <td>Developer</td>
                                            <td>:</td>
                                            <td>Muhammad Fauzan.</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>Web Developer - Riset & Teknologi.</td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td>:</td>
                                            <td>Politeknik Negeri Batam.</td>
                                        </tr>
                                        <tr>
                                            <td>Versi</td>
                                            <td>:</td>
                                            <td>1.0</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- SweetAlert2 -->
        <script src="../../template/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Bootstrap 4 -->
        <script src="../../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../template/dist/js/adminlte.min.js"></script>
        <!-- Lottie Files Animation -->
        <script src="../../../asset/animasi/js/lottie-player.js"></script>

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
            // Alert Default
            $('.hapus').on('click', function(e) {
                e.preventDefault();
                const url = $(this).attr('href'); //mengambil nilai sesuai id dengan get att href

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak dapat memulihkan data ini!",
                    icon: 'warning',
                    position: 'center',
                    showCancelButton: true,
                    confirmButtonColor: '#32CD32',
                    cancelButtonColor: '#FF0000',
                    confirmButtonText: 'Iya, hapus data!',
                    cancelButtonText: 'Tidak',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = url;
                    } else if (result.dismiss) {
                        Swal.fire({
                            title: 'Proses dibatalkan!',
                            text: 'Sekarang data anda aman',
                            icon: 'error',
                            position: 'center',
                            timer: 1400,
                            showClass: {
                                popup: 'animate__animated animate__fadeInUp'
                            },
                            showConfirmButton: false,
                        })
                    }
                })

            })
            // --------------------------------------------------------------------

            // Alert Logout
            $('.logout').on('click', function(e) {
                e.preventDefault();
                const url = $(this).attr('href'); //mengambil nilai sesuai id dengan get att href
                Swal.fire({
                    title: 'Anda yakin ingin keluar?',
                    text: 'Tentukan pilihan anda',
                    icon: 'warning',
                    position: 'center',
                    showCancelButton: true,
                    confirmButtonColor: '#32CD32',
                    cancelButtonColor: '#FF0000',
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Tidak',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = url;
                    } else if (result.dismiss) {
                        Swal.fire({
                            title: 'Kembali ke sistem!',
                            text: 'Terima kasih',
                            icon: 'success',
                            position: 'center',
                            timer: 1400,
                            showClass: {
                                popup: 'animate__animated animate__fadeInUp'
                            },
                            showConfirmButton: false,
                        })
                    }
                })

            })
        </script>

        <Script>
            $(function() {
                $('.tableView').DataTable({
                    "paging": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    stateSave: false,
                    "searching": true,
                    "ordering": false,
                    "scrollX": false,
                    // fixedColumns: {
                    //     left: 2,
                    //     right: 1
                    // },
                    lengthMenu: [
                        [5, 8, 10],
                        ["5", "8", "10"]

                    ],
                });
            });
        </Script>
        <script>
            // Alert biasa
            window.setTimeout(function() {
                $('.alert').fadeTo(1500, 0).slideUp(500, function() {
                    $(this).remove();
                })
            });

            // Javascript Date time picker
            $('.datetimepicker').datetimepicker()

            // Javascript Date Picker
            $('.datepicker').datetimepicker({
                i18n: {
                    de: {
                        months: [
                            'Januar', 'Februar', 'März', 'April',
                            'Mai', 'Juni', 'Juli', 'August',
                            'September', 'Oktober', 'November', 'Dezember',
                        ],
                        dayOfWeek: [
                            "So.", "Mo", "Di", "Mi",
                            "Do", "Fr", "Sa.",
                        ]
                    }
                },
                timepicker: false,
                format: 'd-m-Y'
            });
            // -------------------------------------------------

            //Initialize Select2 Elements
            $('.select2').select2()
            $('.search_select').select2()
            $('.select3').select2()
            $('.select4').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            /** add active class and stay opened when selected */
            var url = window.location;

            // for sidebar menu entirely but not cover treeview
            $('ul.nav-sidebar a').filter(function() {
                return this.href == url;
            }).addClass('active');

            // for treeview
            $('ul.nav-treeview a').filter(function() {
                return this.href == url;
            }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
            //.........................................................................................................
            ClassicEditor.create(document.querySelector('.editor'))
                .catch(error => {
                    console.error(error);
                });
            // CKEDITOR.replace('');
        </script>
</body>

</html>
