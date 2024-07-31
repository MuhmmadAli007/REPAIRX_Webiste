<!DOCTYPE html>
<html lang="en">

@extends('frontend.layout.main')
@section('main-container')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Projects || web project </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="frontend/images/favicons/site.webmanifest" />
    <meta name="description" content="Assimox HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="frontend/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="frontend/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="frontend/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="frontend/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="frontend/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="frontend/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="frontend/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="frontend/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="frontend/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="frontend/vendors/assimox-icons/style.css">
    <link rel="stylesheet" href="frontend/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="frontend/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="frontend/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="frontend/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="frontend/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="frontend/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="frontend/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="frontend/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="frontend/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="frontend/vendors/free-hand-font/stylesheet.css" />
    <link rel="stylesheet" href="frontend/vendors/nice-select/nice-select.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="frontend/css/assimox.css" />
    <link rel="stylesheet" href="frontend/css/assimox-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="layer layer-one"><span class="overlay"></span></div>
                <div class="layer layer-two"><span class="overlay"></span></div>
                <div class="layer layer-three"><span class="overlay"></span></div>
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="X" class="letters-loading">
                            X
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->




    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="frontend/images/resources/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h3>We Provide Home Appliances <br> Repairing Service</h3>
                                <div class="inner-text">
                                    <p>Our experienced team offers services for both residential and commercial
                                        properties.With over 25 years of experience in the industry, we boast all of the
                                        knowledge and expertise in repairing.</p>
                                </div>
                            </div>

                            <div class="sidebar-contact-info">
                                <h3>Conatct Us</h3>
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="frontend/images/icon/side-menu-icon-1.png" alt="">
                                            </div>
                                            <div class="text">
                                                <p>54B, Tailstoi Town 5238 MT,<br> La city, IA 522364</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="frontend/images/icon/side-menu-icon-2.png" alt="">
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:contact@assimox.com">contact@assimox.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="frontend/images/icon/side-menu-icon-3.png" alt="">
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:+18004567890">+1800 456 7890</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="frontend/images/icon/side-menu-icon-4.png" alt="">
                                            </div>
                                            <div class="text">
                                                <p>Working Hrs : 9.30am to 6.30pm</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="side-content-newsletter-box">
                                <h3>Newsletter Subscription</h3>
                                <form action="https://bracketweb.com/assimox-html/index.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                                        <button class="thm-btn" type="submit">subscribe now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->


    <div class="page-wrapper">


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(frontend/images/backgrounds/page-header-bg-img.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-header__inner">
                            <h2 class="page-header__title">Projects</h2>
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Project Page Start-->
        <section class="project-page">
            <div class="container">
                <div class="row">
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-1.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Cookware Stove</a>
                                    </h4>
                                    <p class="project-page__sub-title">Repairing</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-2.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Microwave</a>
                                    </h4>
                                    <p class="project-page__sub-title">service</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-3.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Water Heater</a>
                                    </h4>
                                    <p class="project-page__sub-title">Installation</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-4.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Washing Machine</a>
                                    </h4>
                                    <p class="project-page__sub-title">service</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-5.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Air Conditioner</a>
                                    </h4>
                                    <p class="project-page__sub-title">Cleaning</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-6.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Refrigerator</a>
                                    </h4>
                                    <p class="project-page__sub-title">service</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-7.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Mixer Juicer</a>
                                    </h4>
                                    <p class="project-page__sub-title">repairing</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                    <!--Project Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page__single">
                            <div class="project-page__img">
                                <img src="frontend/images/project/project-page-1-8.jpg" alt="">
                                <div class="project-page__link-text">
                                    <a href="{{url('/project-details')}}">project details</a>
                                </div>
                            </div>
                            <div class="project-page__content">
                                <div class="project-page__title-box">
                                    <h4 class="project-page__title"><a href="{{url('/project-details')}}">Kitchen Chimney</a>
                                    </h4>
                                    <p class="project-page__sub-title">Installation</p>
                                </div>
                                <div class="project-page__arrow">
                                    <a href="{{url('/project-details')}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Single End-->
                </div>
            </div>
        </section>
        <!--Project Page End-->

        <!--Site Footer Start-->

        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{url('/')}}" aria-label="logo image"><img src="frontend/images/resources/logo-2.png" width="200"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@repairx.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="frontend/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/vendors/jarallax/jarallax.min.js"></script>
    <script src="frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="frontend/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="frontend/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="frontend/vendors/nouislider/nouislider.min.js"></script>
    <script src="frontend/vendors/odometer/odometer.min.js"></script>
    <script src="frontend/vendors/swiper/swiper.min.js"></script>
    <script src="frontend/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="frontend/vendors/wnumb/wNumb.min.js"></script>
    <script src="frontend/vendors/wow/wow.js"></script>
    <script src="frontend/vendors/isotope/isotope.js"></script>
    <script src="frontend/vendors/countdown/countdown.min.js"></script>
    <script src="frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="frontend/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="frontend/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="frontend/vendors/vegas/vegas.min.js"></script>
    <script src="frontend/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="frontend/vendors/timepicker/timePicker.js"></script>
    <script src="frontend/vendors/circleType/jquery.circleType.js"></script>
    <script src="frontend/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="frontend/vendors/sidebar-content/jquery-sidebar-content.js"></script>
    <script src="frontend/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="frontend/vendors/tweenmax/TweenMax.min.js"></script>




    <!-- template js -->
    <script src="frontend/js/assimox.js"></script>
</body>
@endsection

</html>
