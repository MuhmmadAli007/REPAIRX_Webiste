<!DOCTYPE html>
<html lang="en">

@extends('frontend.layout.main')
@section('main-container')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Blog Details || web project </title>
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
                                <a href="index.php"><img src="frontend/images/resources/logo-2.png" alt="" /></a>
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
                                                <p><a href="tel:+92-321-7803933">+92-321-7803933</a></p>
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
                            <h2 class="page-header__title">Blog Details</h2>
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="index.php">Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Blog Page Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__top">
                                <div class="blog-details__img-box">
                                    <div class="blog-details__img">
                                        <img src="frontend/images/blog/blog-details-img-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details__bottom">
                                <div class="blog-details__meta-box">
                                    <div class="blog-details__date">
                                        <p>22 Feb. 2022</p>
                                    </div>
                                    <ul class="list-unstyled blog-details__meta">
                                        <li><a href="{{url('/blog-details')}}">By : Admin</a></li>
                                        <li><a href="{{url('/blog-details')}}">repairing, maintenance</a></li>
                                        <li><a href="{{url('/blog-details')}}">Comments: 6</a></li>
                                    </ul>
                                </div>
                                <div class="blog-detals__content-box">
                                    <h4 class="blog-details__title-1">How to Hire a Machanic for Appliances Fix</h4>
                                    <p class="blog-details__text-1">Our objective at repairx is to bring together our
                                        visitor's societies and spirits with our own, communicating enthusiasm and
                                        liberality in the food we share. assimox is to bring together our visitor's
                                        societies and spirits with our own, communicating enthusiasm and liberality in
                                        the food we share.</p>
                                    <div class="blog-detals__two-colum-box">
                                        <h4 class="blog-detals__two-colum-box-title">Two Column Text Sample</h4>
                                        <ul class="blog-detals__two-colum-text list-unstyled">
                                            <li>Most appliances with the best chance of repair are generally under 6 years old, as parts are normally readily available from manufacturers and suppliers.</li>
                                            <li>Most appliances can be repaired, regardless of age. However, appliances with the best chance of repair are generally under 6 years old, as parts are normally readily available from manufacturers and suppliers.</li>
                                        </ul>
                                    </div>
                                    <p class="blog-details__text-2">Most appliances can be repaired, regardless of age. However, appliances with the best chance of repair are generally under 6 years old, as parts are normally readily available from manufacturers and suppliers. <a href="#">here is link</a>
                                        cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="comment-one-box">
                                    <h3 class="comment-one__title">Comments 4</h3>
                                    <div class="comment-one">
                                        <div class="comment-one__single">
                                            <div class="comment-one__image">
                                                <img src="frontend/images/blog/comment-1-1.jpg" alt="">
                                            </div>
                                            <div class="comment-one__content">
                                                <h3>Michale</h3>
                                                <p>we denounce with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the moment.
                                                </p>
                                                <h4>24 Jan. 2022 | <a href="{{url('/blog-details')}}">Reply</a></h4>
                                            </div>
                                        </div>
                                        <div class="comment-one__single comment-one__single-2">
                                            <div class="comment-one__image">
                                                <img src="frontend/images/blog/comment-1-2.jpg" alt="">
                                            </div>
                                            <div class="comment-one__content">
                                                <h3>Smith</h3>
                                                <p>we denounce with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the moment.
                                                </p>
                                                <h4>24 Jan. 2022 | <a href="{{url('/blog-details')}}">Reply</a></h4>
                                            </div>
                                        </div>
                                        <div class="comment-one__single border-none">
                                            <div class="comment-one__image">
                                                <img src="frontend/images/blog/comment-1-3.jpg" alt="">
                                            </div>
                                            <div class="comment-one__content">
                                                <h3>Martin</h3>
                                                <p>we denounce with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the moment.
                                                </p>
                                                <h4>24 Jan. 2022 | <a href="{{url('/blog-details')}}">Reply</a></h4>
                                            </div>
                                        </div>
                                        <div class="comment-one__single comment-one__single--four">
                                            <div class="comment-one__image">
                                                <img src="frontend/images/blog/comment-1-4.jpg" alt="">
                                            </div>
                                            <div class="comment-one__content">
                                                <h3>Jessica</h3>
                                                <p>we denounce with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the moment.
                                                </p>
                                                <h4>24 Jan. 2022 | <a href="{{url('/blog-details')}}">Reply</a></h4>
                                            </div>
                                        </div>
                                        <div class="comment-one__single comment-one__single-5">
                                            <div class="comment-one__image">
                                                <img src="frontend/images/blog/comment-1-5.jpg" alt="">
                                            </div>
                                            <div class="comment-one__content">
                                                <h3>Piter</h3>
                                                <p>we denounce with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the moment.
                                                </p>
                                                <h4>24 Jan. 2022 | <a href="{{url('/blog-details')}}">Reply</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Leave a Comment</h3>
                                    <form action="https://bracketweb.com/assimox-html/frontend/inc/sendemail.php"
                                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">submit now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Enter Search Keywords">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="{{url('/blog-details')}}">Home Construction<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                    <li class="active"><a href="{{url('/blog-details')}}">General Construction<span
                                                class="fas fa-angle-right"></span></a></li>
                                    <li><a href="{{url('/blog-details')}}">Roof Renovation<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                    <li><a href="{{url('/blog-details')}}">Company Profile<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                    <li><a href="{{url('/blog-details')}}">Constrcution Projects<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                    <li><a href="{{url('/blog-details')}}">Roof Gutter<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent News</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="frontend/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{url('/blog-details')}}">Know the secreat of Repairing Work ...</a>
                                            </h3>
                                            <p>22 Jan. 2022</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="frontend/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{url('/blog-details')}}">We Can Inspect Your Venting Path for Mold If
                                                    Needed</a></h3>
                                            <p>22 Nov. 2021</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="frontend/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{url('/blog-details')}}">Our Customer enjoy in our work in real
                                                    ...</a></h3>
                                            <p>22 Nov. 2021</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="frontend/images/blog/lp-1-4.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{url('/blog-details')}}">It is a long established fact that a
                                                    reader</a></h3>
                                            <p>22 Nov. 2021</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tages</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Repairing</a>
                                    <a href="#">Renovation</a><br>
                                    <a href="#">Wooden</a>
                                    <a href="#">Prices</a><br>
                                    <a href="#">Tips</a>
                                    <a href="#">Side Layer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Page End-->


        <!--Site Footer Start-->

        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="frontend/images/resources/logo-2.png" width="200"
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
                    <a href="tel:92-3221-7803033">+92-3221-7803033</a>
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
