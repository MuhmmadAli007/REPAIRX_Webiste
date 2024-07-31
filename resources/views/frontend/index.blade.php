
@extends('frontend.layout.main')
@section('main-container')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home Services || web project </title>
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
                                <a href="{{url('/')}}"><img src="frontend/images/resources/logo-2.png" style="width: 200px;" alt="" />
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
                                                <p>54B, model town lahore MT,<br> La city, IA 522364</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="frontend/images/icon/side-menu-icon-2.png" alt="">
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:contact@repairx.com">contact@repairx.com</a>
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


        <div class="stricky-header stricked-menu main-menu main-header--dark">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider__image" style="background-image: url(frontend/images/backgrounds/main-slider-bg.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We Provide ...</p>
                                        <h2 class="main-slider__title">Home Appliances <br>Repair Service</h2>
                                        <h4 class="main-slider__text">Same day service Guaranteed Or It’s Free!</h4>
                                        <p class="main-slider__text-two">
                                            * Call before 12 Noon, Monday - Friday <br>And we will be there <span>Today</span>, or our labour is <span>Free</span>
                                        </p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{url('/about')}}" class="thm-btn main-slider__btn">Hire us now</a>
                                        </div>
                                        <div class="main-slider__badge">
                                            <img src="frontend/images/resources/main-slider-badge.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider__image" style="background-image: url(frontend/images/backgrounds/main-slider-bg.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We Provide ...</p>
                                        <h2 class="main-slider__title">Home Appliances <br>Repair Service</h2>
                                        <h4 class="main-slider__text">Same day service Guaranteed Or It’s Free!</h4>
                                        <p class="main-slider__text-two">
                                            * Call before 12 Noon, Monday - Friday <br>And we will be there <span>Today</span>, or our labour is <span>Free</span>
                                        </p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{url('/about')}}" class="thm-btn main-slider__btn">Hire us now</a>
                                        </div>
                                        <div class="main-slider__badge">
                                            <img src="frontend/images/resources/main-slider-badge.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                {{-- <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--Main Slider End-->

        <!--Experience And Rating Start-->
        <section class="experience-and-rating">
            <div class="experience-and-rating__wrapper">
                <div class="experience-and-rating__left">
                    <div class="experience-and-rating__left-content">
                        <div class="experience-and-rating__experience">
                            <div class="experience-and-rating__experience-shape-1"
                                style="background-image: url(frontend/images/shapes/experience-and-rating-experience-shape-1.jpg);">
                            </div>
                            <div class="experience-and-rating__experience-year">
                                <h2>20</h2>
                                <h5>year of experience</h5>
                            </div>
                            <div class="experience-and-rating__experience-text-box">
                                <p>Many years of experience in the repair of home equipment of various complexity.</p>
                            </div>
                        </div>
                        <div class="experience-and-rating__video">
                            <div class="experience-and-rating__video-bg"
                                style="background-image: url(frontend/images/backgrounds/experience-and-rating-video-bg.jpg);">
                            </div>
                            <div class="experience-and-rating__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="experience-and-rating__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience-and-rating__right">
                    <div class="experience-and-rating__right-content">
                        <div class="experience-and-rating__rating-box">
                            <div class="experience-and-rating__rating-icon">
                                <span class="icon-review"></span>
                            </div>
                            <p class="experience-and-rating__rating-text">Customers Trust and Love us. We’re rated 5/5
                                out of 300 customer reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Experience And Rating End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="container">
                <div class="services-one__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Our Services</span>
                                    <h2 class="section-title__title">Services We Do For You</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-one-top__right">
                                <div class="services-one__top-icon">
                                    <span class="icon-technician"></span>
                                </div>
                                <p class="services-one__top-text">We work to meet this ambitious goal by focusing on
                                    these key areas of conservation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="services-one__img">
                        <img src="frontend/images/services/services-one-img-1.png" alt="">
                    </div>
                    <ul class="services-one__list-box list-unstyled">
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-refrigerator"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Refrigerator</a></h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-washing-machine"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Washing Machine</a>
                                    </h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-oven"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Microwave & Oven</a>
                                    </h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-water-heater"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Water Heater</a></h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-gas"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Cookware Stove</a>
                                    </h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-blender"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Juicer Mixer</a></h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <li class="services-one__list">
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-ac"></span>
                                </div>
                                <div class="services-one__title-box">
                                    <h4 class="services-one__title"><a href="{{url('/services')}}">Air Conditioner</a>
                                    </h4>
                                    <p class="services-one__sub-title">Service and Repairs</p>
                                </div>
                                <div class="services-one__read-more">
                                    <a href="{{url('/services')}}">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </li>
                        <!--Services One Single End-->
                    </ul>
                </div>
                <div class="services-one__all-services">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="services-one__all-services-inner">
                                <p>We Do All Differeent Services .... <a href="{{url('/services')}}">View all Services</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="frontend/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__satisfaction">
                                    <div class="about-one__satisfaction-count-box">
                                        <h3>
                                            <span class="odometer" data-count="2.8">00</span>
                                            <span class="about-one__satisfaction-letter">k</span>
                                            <span class="about-one__satisfaction-plus">+</span>
                                        </h3>
                                    </div>
                                    <p class="about-one__satisfaction-text">Satisfied Clients <br> In Our Locality</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">about our company</span>
                                <h2 class="section-title__title">Complete Solution for all Your Home Appliance Problems
                                </h2>
                            </div>
                            <p class="about-one__text-1">Bring to the table win-win survival strategies to ensure
                                proactive domination ensure proactive domin.</p>
                            <p class="about-one__text-2">At the end of the day, going forward, a new normal that has
                                evolved from generation X is on the runway heading towards a streamlined cloud solution.
                                strategies to ensure proactive domination. At the end of the day,User generated content
                                in real-time will have multiple touchpoints for offshoring. At the end of the day,User
                                generated content in real-time will have multiple touchpoints for offshoring.</p>
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Highly Professional Staff</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>100% Satisfaction Guarantee</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Quality Control System</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Accourate Testing Process</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Unrivalle Workmanship</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__points-icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Timely Delivery</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one__img-1">
                <img src="frontend/images/resources/why-choose-one-img-1.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="why-choose-one__content">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">why choose us</span>
                                <h2 class="section-title__title">Our Advantages</h2>
                            </div>
                            <p class="why-choose-one__text">If you need to repair or replace your Plumbing system, call
                                today and talk to one of our Plumbing specialists. They’ll answer all your questions and
                                arrange an appointment at your convenience. If you need to repair or replace your
                                Plumbing system call today and talk to one.</p>
                            <div class="why-choose-one__points-box">
                                <ul class="list-unstyled why-choose-one__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <div class="text">
                                            <p>We Perform All <br> Work On Time</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-home"></span>
                                        </div>
                                        <div class="text">
                                            <p>Professional <br> Standard</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled why-choose-one__points why-choose-one__points-two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-guarantee"></span>
                                        </div>
                                        <div class="text">
                                            <p>We Guarantee <br> Spare Parts</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-worker"></span>
                                        </div>
                                        <div class="text">
                                            <p>Over 18 Year <br> Of Experience</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Process Start-->
        <section class="process">
            <div class="container">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Our Process</span>
                    <h2 class="section-title__title">Get Our Service In 4 Steps</h2>
                </div>
                <div class="row">
                    <!--Process Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="process__single">
                            <div class="process__count"></div>
                            <div class="process__icon">
                                <span class="icon-contact"></span>
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Contact Us</h4>
                                <p class="process__sub-title">First Steop of Process</p>
                            </div>
                            <p class="process__text">Perspiciatis unde omnis iste natus error voluptatem</p>
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="process__single">
                            <div class="process__count"></div>
                            <div class="process__icon">
                                <span class="icon-conversation"></span>
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Breakdown Analysis</h4>
                                <p class="process__sub-title">Second Steop of Process</p>
                            </div>
                            <p class="process__text">Perspiciatis unde omnis iste natus error voluptatem</p>
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="process__single">
                            <div class="process__count"></div>
                            <div class="process__icon">
                                <span class="icon-repair"></span>
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Performing Repairs</h4>
                                <p class="process__sub-title">Third Steop of Process</p>
                            </div>
                            <p class="process__text">Perspiciatis unde omnis iste natus error voluptatem</p>
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="process__single">
                            <div class="process__count"></div>
                            <div class="process__icon">
                                <span class="icon-fixed"></span>
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Fix the Problem</h4>
                                <p class="process__sub-title">Third Steop of Process</p>
                            </div>
                            <p class="process__text">Perspiciatis unde omnis iste natus error voluptatem</p>
                        </div>
                    </div>
                    <!--Process Single End-->
                </div>
            </div>
        </section>
        <!--Process End-->

        <!--Contact Bar Start-->
        <section class="contact-bar">
            <div class="container">
                <div class="contact-bar__inne">
                    <div class="contact-bar__bg"
                        style="background-image: url(frontend/images/backgrounds/contact-bar-bg.jpg);"></div>
                    <div class="contact-bar__left">
                        <div class="contact-bar__left-icon">
                            <span class="icon-diagnostic"></span>
                        </div>
                        <div class="contact-bar__left-content">
                            <h3 class="contact-bar__title">Do You Want Free Diagnostics ?</h3>
                            <p class="contact-bar__text">Get free diagnostics when ording online from our website</p>
                        </div>
                    </div>
                    <div class="contact-bar__right">
                        <div class="contact-bar__call">
                            <div class="contact-bar__call-icon">
                                <img src="frontend/images/icon/contact-bar-call-icon.png" alt="">
                            </div>
                            <div class="contact-bar__call-content">
                                <h4 class="contact-bar__call-number"><a href="tel:18004567890">+1800 456 7890</a></h4>
                                <p class="contact-bar__call-time">Monday - Saturday : 9.30 am - 6.00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Bar End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Our Professionals</span>
                    <h2 class="section-title__title">Our Dedicated Team</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="frontend/images/team/team-1-1.jpg" alt="">
                                    <div class="team-one__shape-1">
                                        <img src="frontend/images/shapes/team-one-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__icon">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                        <div class="team-one__social-box">
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="{{url('/team')}}">Robert Joe</a></h3>
                                    <p class="team-one__subtitle">Ceo of company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="frontend/images/team/team-1-2.jpg" alt="">
                                    <div class="team-one__shape-1">
                                        <img src="frontend/images/shapes/team-one-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__icon">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                        <div class="team-one__social-box">
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="{{url('/team')}}">Robert Mick</a></h3>
                                    <p class="team-one__subtitle">Ceo of company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="frontend/images/team/team-1-3.jpg" alt="">
                                    <div class="team-one__shape-1">
                                        <img src="frontend/images/shapes/team-one-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__icon">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                        <div class="team-one__social-box">
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="{{url('/team')}}">Mike Hardson</a></h3>
                                    <p class="team-one__subtitle">Ceo of company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="frontend/images/team/team-1-4.jpg" alt="">
                                    <div class="team-one__shape-1">
                                        <img src="frontend/images/shapes/team-one-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__icon">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                        <div class="team-one__social-box">
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="{{url('/team')}}">Kevin Martin</a></h3>
                                    <p class="team-one__subtitle">Ceo of company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Tetimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(frontend/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="testimonial-one__content-box">
                            <div class="testimonial-one__title-box">
                                <h5>testimonials</h5>
                            </div>
                            <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                "items": 3,
                                "margin": 30,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":true,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "768":{
                                        "items":1
                                    },
                                    "992":{
                                        "items": 1
                                    }
                                }
                            }'>
                                <!--Tetimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1">
                                                <img src="frontend/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__shape-2">
                                                <img src="frontend/images/shapes/testimonial-one-shape-2.png" alt="">
                                            </div>
                                            <div class="testimonial-one__quote">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <p class="testimonial-one__text">From kitchen gadgets like blenders and food processors to laundry appliances such as washing machines and dryers, these tools streamline everyday chores, saving time and energy. Additionally, home service appliances often incorporate advanced technologies like smart features and energy-saving options, enhancing convenience and sustainability .</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img">
                                                <img src="frontend/images/testimonial/testimonial-1-1.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <p class="testimonial-one__client-name">- Michale John</p>
                                                <h5 class="testimonial-one__client-title">Ceo of Minda</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Tetimonial One Single End-->
                                <!--Tetimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1">
                                                <img src="frontend/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__shape-2">
                                                <img src="frontend/images/shapes/testimonial-one-shape-2.png" alt="">
                                            </div>
                                            <div class="testimonial-one__quote">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <p class="testimonial-one__text">From kitchen gadgets like blenders and food processors to laundry appliances such as washing machines and dryers, these tools streamline everyday chores, saving time and energy. Additionally, home service appliances often incorporate advanced technologies like smart features and energy-saving options, enhancing convenience and sustainability ..</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img">
                                                <img src="frontend/images/testimonial/testimonial-1-2.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <p class="testimonial-one__client-name">- Michale Golf</p>
                                                <h5 class="testimonial-one__client-title">Ceo of Minda</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Tetimonial One Single End-->
                                <!--Tetimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1">
                                                <img src="frontend/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__shape-2">
                                                <img src="frontend/images/shapes/testimonial-one-shape-2.png" alt="">
                                            </div>
                                            <div class="testimonial-one__quote">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <p class="testimonial-one__text">From kitchen gadgets like blenders and food processors to laundry appliances such as washing machines and dryers, these tools streamline everyday chores, saving time and energy. Additionally, home service appliances often incorporate advanced technologies like smart features and energy-saving options, enhancing convenience and sustainability ..</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img">
                                                <img src="frontend/images/testimonial/testimonial-1-1.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <p class="testimonial-one__client-name">- Michale Pole</p>
                                                <h5 class="testimonial-one__client-title">Ceo of Minda</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Tetimonial One Single End-->
                                <!--Tetimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1">
                                                <img src="frontend/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__shape-2">
                                                <img src="frontend/images/shapes/testimonial-one-shape-2.png" alt="">
                                            </div>
                                            <div class="testimonial-one__quote">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <p class="testimonial-one__text">From kitchen gadgets like blenders and food processors to laundry appliances such as washing machines and dryers, these tools streamline everyday chores, saving time and energy. Additionally, home service appliances often incorporate advanced technologies like smart features and energy-saving options, enhancing convenience and sustainability ..</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img">
                                                <img src="frontend/images/testimonial/testimonial-1-2.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <p class="testimonial-one__client-name">- Adam Milne</p>
                                                <h5 class="testimonial-one__client-title">Ceo of Minda</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Tetimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tetimonial One End-->


        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="blog-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="blog-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">our blogs</span>
                                    <h2 class="section-title__title">News & Articles</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="blog-one__top-right">
                                <p class="blog-one__top-text-1">At the end of the day, going forward, a new normal that
                                    has evolved from generation X is on the runway heading towards a streamlined cloud
                                    solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-one__bottom">
                    <div class="row">
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="frontend/images/blog/blog-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="blog-one__content-box">
                                    <div class="blog-one__date">
                                        <p><span>Admin</span>17 March 2022</p>
                                    </div>
                                    <h3 class="blog-one__title"><a href="{{url('/blog-details')}}">How we can fix any problem
                                            in household
                                            things.</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="blog-one__single active">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="frontend/images/blog/blog-1-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="blog-one__content-box">
                                    <div class="blog-one__date">
                                        <p><span>Admin</span>17 March 2022</p>
                                    </div>
                                    <h3 class="blog-one__title"><a href="{{url('/blog-details')}}">we provide services for home appliances and renovations</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="frontend/images/blog/blog-1-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="blog-one__content-box">
                                    <div class="blog-one__date">
                                        <p><span>Admin</span>17 March 2022</p>
                                    </div>
                                    <h3 class="blog-one__title"><a href="{{url('/blog-details')}}">
</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Blog One End-->

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
                    <a href="tel:+92-321-7803933">+92-321-7803933</a>
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
    <script src="frontend/vendors/tweenmax/TweenMax.min.js"></script>




    <!-- template js -->
    <script src="frontend/js/assimox.js"></script>
</body>
@endsection

</html>
