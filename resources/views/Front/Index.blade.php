</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    <link rel="icon" href={{ asset("Logo/KPUM.ico") }} type="image/x-icon"/>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href={{ asset("Arsha/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/icofont/icofont.min.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/remixicon/remixicon.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/venobox/venobox.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/owl.carousel/assets/owl.carousel.min.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/vendor/aos/aos.css") }} rel="stylesheet">
    <link href={{ asset("Arsha/css/style.css") }} rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href={{ asset("styleArsha.css") }} rel="stylesheet">
</head>

@if (Session::has('alertSuccess'))
<body onpageshow="alertSuccess()">
@elseif (Session::has('alertInfo'))
<body onpageshow="alertInfo()">
@elseif (Session::has('alertDanger'))
<body onpageshow="alertDanger()">
@else
<body>
@endif
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="{{ route('Beranda') }}" class="logo mr-auto"><img src="{{ asset("Logo/KPUM.png") }}"
                    alt="" class="img-fluid"> <b>KPUM</b> Fasilkom Unej</a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{ route('Beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('DataPemilih') }}">Data Pemilih</a></li>
                    <li><a href="#">Dasar Hukum</a></li>
                </ul>
            </nav>
            <a href="{{ route('Login') }}" class="get-started-btn scrollto">Login</a>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>KPUM<br>Fasilkom Unej</h1>
                    <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <center>
                        <a onclick="#"><img src="{{ asset('Logo/KPUM.png') }}"
                                class="img-fluid animated" alt="" width="50%"></a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section id="cliens" class="cliens">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/univ_jember/" target="_blank"><img
                            src="{{ asset('Logo/Unej.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/bpmilkomunej/" target="_blank"><img
                            src="{{ asset('Logo/BPM.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/bemilkomunej/" target="_blank"><img
                            src="{{ asset('Logo/BEM.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/himasif/" target="_blank"><img
                            src="{{ asset('Logo/HIMASIF.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/himatifunej/" target="_blank"><img
                            src="{{ asset('Logo/HIMATIF.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/hmifunej/" target="_blank"><img
                            src="{{ asset('Logo/HMIF.png') }}" width="50%" class="img-fluid" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <main>
        @yield('Main')
    </main>
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>KPUM Fasilkom Unej</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="{{ route('Beranda') }}"><strong>Divisi PDD KPUM Fasilkom Unej</strong></a>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
    <script src={{ asset("Arsha/vendor/jquery/jquery.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/jquery.easing/jquery.easing.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/php-email-form/validate.js") }}></script>
    <script src={{ asset("Arsha/vendor/waypoints/jquery.waypoints.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/venobox/venobox.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/owl.carousel/owl.carousel.min.js") }}></script>
    <script src={{ asset("Arsha/vendor/aos/aos.js") }}></script>
    <script src={{ asset("Arsha/js/main.js") }}></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    @php
    echo "
    <script>
        function filosofiyayasan() {
            swal({
                height: '90%',
                imageUrl: '".asset('Habilis/Front/FilosofiYayasan.jpeg')."',
                showConfirmButton: false,
                showCancelButton: false
            });
        }
        function alertSuccess() {
            swal({
                width: 350,
                type: 'success',
                title: 'Sukses',
                text: '".Session::get('alertSuccess')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
        function alertInfo() {
            swal({
                width: 350,
                type: 'info',
                title: 'Info',
                text: '".Session::get('alertInfo')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
        function alertDanger() {
            swal({
                width: 350,
                type: 'error',
                title: 'Gagal',
                text: '".Session::get('alertDanger')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
    </script>
    ";
    @endphp

</body>

</html>