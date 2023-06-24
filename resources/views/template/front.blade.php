<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Kita Bersama</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master')}}/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- canvas overlay --}}
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="row">
                <div class="col-lg-3 col-md-3 header__top__left">
                    <div class="header__logo">
                        <a href="{{route('HalamanDepan')}}"><h5 class="font-weight-bold">Sekolah Kita Bersama</h5></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 header__top__right">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('HalamanDepan')}}">Home</a></li>
                            <li><a href="{{route('Informasi')}}">Informasi Lanjut</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 header__top__hover">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{route('dashboard.index')}}">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{route('HalamanDepan')}}"><h5 class="font-weight-bold">Sekolah Kita Bersama</h5></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('HalamanDepan')}}">Home</a></li>
                            <li><a href="{{route('Informasi')}}">Informasi Lanjut</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{route('dashboard.index')}}">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End --> 
       
            @yield('user')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Jadilah yang pertama mendaftar, diskon sebesar 40% bagi orang tercepat!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>Daffa Nazhmi Hakim All rights reserved | <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('malefashion-master')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/jquery.nicescroll.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/jquery.slicknav.js"></script>
    <script src="{{asset('malefashion-master')}}/js/mixitup.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('malefashion-master')}}/js/main.js"></script>
</body>

</html>