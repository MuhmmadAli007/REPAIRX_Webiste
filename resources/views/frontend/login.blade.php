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
</body>

    <br><br>
    <br>
    <br>
    <br>
    <br>
    <hr>






<div class="container">
		<div class="row">
			<div class="account-area fix">
				<h1 class="form-title text-center">My Account</h1>
				<div class="row justify-content-center">
					<div class="col-12 col-md-6">
						<div class="form-area">
							<div class="form-fields">
								<h2>Login</h2>
								<form action="#" method="post">
                                    @csrf
									<p>
										<label>Email address <span class="required">*</span></label>
										<input type="text" name="email">
                                        @if ($errors->has('email'))
                                                <span class="text-danger">
                                                    {{$errors->first('email')}}
                                                </span>
                                            @endif
									</p>
									<p>
										<label>Password <span class="required">*</span></label>
										<input type="password" name="password">
                                        @if ($errors->has('password'))
                                                <span class="text-danger">
                                                    {{$errors->first('password')}}
                                                </span>
                                            @endif
									</p>

                                <div class="form-action fix justify-content-between d-flex">
                                    <p><a href="#">Lost your password?</a></p>
                                    <div class="d-flex justify-content-between">
                                        <label><input type="checkbox"> Remember me </label>
                                        <input type="submit" value="Login">
                                    </div>
                                    </div>
								</form>
                            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
    @endsection
