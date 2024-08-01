
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure-Dental</title>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link type="image/x-icon" href="{{asset('front/assets/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/plugins/fontawesome/css/all.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('front/assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('front/assets/js/respond.min.js')}}"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>

<style>
    .section.section-search {
        background-image: none;
        background-color: #f0f0f0; /* Örnek olarak açık gri bir renk */
    }
</style>

<body>



<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header home">

        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                </a>
                <!--- href icine olusturdugun anasayfa rooutunu koy--->
                <a href="{{route('anasayfa')}}" class="navbar-brand logo">
                    Esma's Blog
                </a>
            </div>

            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="{{asset('front/assets/img')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">


                    <li class="active">
                        <a href="{{route("anasayfa")}}">Anasayfa</a>
                    </li>

                    <li class="has-submenu">
                        <a href="index.html">HAKKIMDA </a>
                    </li>

                    <li class="has-submenu">
                        <a href="admin/index.html" target="_blank">Admin</a>
                    </li>

                    <li class="has-submenu">
                        <a href="">{{\Illuminate\Support\Facades\Auth::user()->name}} <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault() ;this.closest('form').submit();">Çıkış</a>
                            </form>

                        </ul>
                    </li>

                </ul>
            </div>

            </ul>


        </nav>
    </header>
    <!-- /Header -->


    <!-- Home Banner -->


        <div class="container">

            <br><br><br>
            @yield('content')


        </div>


    <!-- /Home Banner -->



    <!-- Footer -->
    <footer class="footer">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">

                    </div>
                    <div class="social-icon media-btn mt-3 mb-2">
                        <ul>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 justify-content-center d-flex mt-4 mb-2">
                        <div class="search-holder">
                            <input type="text" name="search" placeholder="Your Email" />
                            <button class="btn btn-yellow">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <ul class="policy-menu text-center">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="doctor-dashboard.html">Doctors</a></li>
                            <li><a href="blog-list.html">Blogs</a></li>
                            <li><a href="#">Our Clinic</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="term-condition.html">Terms and Conditions</a></li>
                            <li><a href="privacy-policy.html">Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container-fluid">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text-center">
                            <div class="copyright-text">
                                <p class="mb-0">&copy; 2020 <a href=# class="text-yellow"> Dentalcare</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Slick JS -->
<script src="{{asset('front/assets/js/slick.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('front/assets/js/script.js')}}"></script>


</body>
</html>
