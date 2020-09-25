<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hmend - Home Maintenance, Repair Service HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		
        <!-- all css here -->
        <link rel="stylesheet" href="/css/style.css">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/flaticon.css">
        <link rel="stylesheet" href="/css/ionicons.min.css">
        <link rel="stylesheet" href="/css/headline.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/css/meanmenu.css">
        <link rel="stylesheet" href="/css/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="/css/bundle.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<header class="">
			<!-- header-top-area-start -->
			<div class="header-top-area blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 site-branding col-xs-12">
							<div class="header-logo">
								<a href="index.html"><img src="assets/img/logo/1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-9 hidden-xs">
							<div class="header-left">
								<div class="header-text">
									<div class="header-icon">
										<i class="fa fa-phone"></i>
										<i class="paint-roller"></i>
									</div>
									<div class="header-info">
										<span class="phone">+00-1202-235</span>
										<span class="gmail">hmend@gmail.com</span>
									</div>
								</div>
								<div class="header-text">
									<div class="header-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="header-info">
										<span class="phone">2020 Willshire Glen,</span>
										<span class="gmail">Alpharetta,USA</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 hidden-sm col-xs-12">
							<div class="header-left-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-start -->
			<div id="header-sticky" class="main-menu-area gray-bg ">
				<div class="container">
					<div class="row">
						<div class=" col-lg-10 col-md-8  col-xs-7">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="index.html">home</a>
										</li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="service.html">service</a>
											<ul class="sub-menu">
												<li><a href="service-details.html">service-details</a></li>
											</ul>
										</li>
										<li><a href="project.html">projects</a>
											<ul class="sub-menu">
												<li><a href="project-details.html">project-details</a></li>
											</ul>
										</li>
										<li><a href="blog.html">blog</a>
											<ul class="sub-menu">
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>						
						</div>				
						<div class=" col-lg-2 col-md-4 col-xs-12">
                            
							
                            <div class="make-appointment">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                            
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <span class="member" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </span>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                <a class="dropdown-item" href="/profil">Profile</a>
                                            </div>
                                        </li>
                                        
                                    @endguest
                                </ul>
                            </div>
						</div>
						<div class="col-xs-12"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
		</header>
		<!-- header-top-area-start -->
		<!-- slider-area-start -->
		<div class="slider-area">
			<div class="slider-wrapper ptb-250" style="background-image:url(assets/img/slider/1.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-6 pr-0">
							<div class="slider-text">
								<h2 class="cd-headline loading-bar">The most targetted repair
									<span class="cd-words-wrapper">
										<b class="is-visible">theme.</b>
										<b>company.</b>
										<b>man.</b>
									</span>
								</h2>
								<div class="slider-info">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddoi dmj iusmod tempor incididunt ut labore.</p>
								</div>
								<a href="#">learn more</a>
							</div>	
						</div>
					</div>						
				</div>
			</div>
		</div>
		<!-- slider-area-end -->
		<!-- what-we-do-start -->
		<div class="what-we-do ptb-120">
			<div class="container">
			<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>Our Company</h4>
					<h2>What We Do</h2>
				</div>
				<div class="row">
					<div class="col-md-6 p-r">
						<div>
							<!-- Nav tabs -->
							<ul class="offer-tab" role="tablist">
								<li role="presentation" class="active">
									<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-plus-icon"></i>
											</div>
											<div class="offer-text">
												<span>home Repair</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#profile" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-gear-icon"></i>
											</div>
											<div class="offer-text">
												<span>improvement</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#messages" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-paint-brush"></i>
											</div>
											<div class="offer-text">
												<span>maintains</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#settings" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-strategy-icon"></i>
											</div>
											<div class="offer-text">
												<span>planning</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>					
					</div> 
					<div class="col-md-6 p-t">
						  <!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="offer-wrapper" style="background-image:url(assets/img/tab/1.jpg)">
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
											<li> Window Replacement</li>
											<li> Wall Paintings</li>
											<li> Kitchen Counter</li>
											<li> Pipe Fitting</li>
											<li> Wire Change</li>
											<li> Furniture Moving</li>
										</ul>
										<a href="#">contact now</a>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="offer-wrapper" style="background-image:url(assets/img/tab/2.jpg)">
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
											<li> Window Replacement</li>
											<li> Wall Paintings</li>
											<li> Kitchen Counter</li>
											<li> Pipe Fitting</li>
											<li> Wire Change</li>
											<li> Furniture Moving</li>
										</ul>
										<a href="#">contact now</a>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="offer-wrapper" style="background-image:url(assets/img/tab/3.jpg)">
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
											<li> Window Replacement</li>
											<li> Wall Paintings</li>
											<li> Kitchen Counter</li>
											<li> Pipe Fitting</li>
											<li> Wire Change</li>
											<li> Furniture Moving</li>
										</ul>
										<a href="#">contact now</a>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="settings">
								<div class="offer-wrapper" style="background-image:url(assets/img/tab/4.jpg)">
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
											<li> Window Replacement</li>
											<li> Wall Paintings</li>
											<li> Kitchen Counter</li>
											<li> Pipe Fitting</li>
											<li> Wire Change</li>
											<li> Furniture Moving</li>
										</ul>
										<a href="#">contact now</a>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- what-we-do-end -->
		<!-- home-service-start -->
		<div class="home-service-area gray-bg">
			<div class="col-md-6 p-0 col-xs-12">
				<div class="home-service-wrapper ptb-120" style="background-image:url(assets/img/service/1.jpg)">
					<div class="home-content">
						<h3>Helping centers 24/7 <br> hours open.</h3>
						<div class="content">
							<h4>Contact Us :</h4>
							<p>+123-3258-2548 <br> hmend@gmail.com</p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-6 p-0 col-xs-12">
				<div class="home-area-right">
					<div class="home-section">
						<h3>We Are Professional & Carefully Home Services.</h3>
						<div class="homes-info">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="home-wrapper mb-20">
								<div class="home-text">
									<p>Lorem ipsum dolor sit amet consect adipisicing elit sed. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="home-wrapper mb-20">
								<div class="home-text">
									<p>Lorem ipsum dolor sit amet consect adipisicing elit sed. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 mb-20">
							<div class="home-wrapper">
								<div class="home-text">
									<p>Lorem ipsum dolor sit amet consect adipisicing elit sed. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 mb-20">
							<div class="home-wrapper">
								<div class="home-text">
									<p>Lorem ipsum dolor sit amet consect adipisicing elit sed. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- home-service-end -->
		<!-- our-service-area-start -->
		<div class="our-service-area pt-120 pb-90">
			<div class="container">
				<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>We Provide</h4>
					<h2>Our Services</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="service-wrapper mb-30">
							<div class="service-img">
								<img src="assets/img/service/2.jpg" alt="" />
							</div>
							<div class="service-text text-center">
								<div class="service-icon-img">
									<i class="flaticon-house-icon"></i>
								</div>
								<h2><a href="service-details.html">Wall Paintings</a></h2>
								<p>Lorem ipsum dolor sit amet, consj ectetulor adipisicing elit, sed do eiusmod tempor </p>
								<a href="service-details.html">read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-wrapper mb-30">
							<div class="service-img">
								<img src="assets/img/service/3.jpg" alt="" />
							</div>
							<div class="service-text text-center">
								<div class="service-icon-img">
									<i class="flaticon-house-icon"></i>
								</div>
								<h2><a href="service-details.html">Furniture Moving</a></h2>
								<p>Lorem ipsum dolor sit amet, consj ectetulor adipisicing elit, sed do eiusmod tempor </p>
								<a href="service-details.html">read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="service-wrapper mb-30">
							<div class="service-img">
								<img src="assets/img/service/4.jpg" alt="" />
							</div>
							<div class="service-text text-center">
								<div class="service-icon-img">
									<i class="flaticon-house-icon"></i>
								</div>
								<h2><a href="service-details.html">Kitchen Counter</a></h2>
								<p>Lorem ipsum dolor sit amet, consj ectetulor adipisicing elit, sed do eiusmod tempor </p>
								<a href="service-details.html">read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- our-service-area-end -->
		<!-- testimonial-1-area-start -->
		<div class="testimonial-1-area pt-120 pb-200 gray-bg">
			<div class="container">
				<div class="section-title text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>Testimonial</h4>
					<h2>What Clients Say</h2>
				</div>
			</div>
		</div>
		<!-- testimonial-1-area-end -->
		<!-- testimonial-area-start -->
		<div class="testimonial-area">
			<div class="container">
				<div class="row">
					<div class="testimonial-active owl-carousel">
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/1.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Handy Man</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/2.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Maksud Reza</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/3.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Miller Ko</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/4.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Maksud Reza</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/1.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Jon Frank</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/2.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Maksud Reza</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/3.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Lorem ipsum dolor sit amet, conse cteturlol adipisicing elit, sed do eiusmod tem porlop incididunt ut labore et dolore. </p>
									<span>Jon Doe</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial-area-end -->
		<!-- counter-area-start -->
		<div class="counter-area pt-120 pb-85">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="counter-wrapper mb-30">
							<div class="counter-img">
								<img src="assets/img/counter/1.png" alt="" />
							</div>
							<div class="counter-text">
								<h2 class="counter">340</h2>
							</div>
							<span class="customers">Happy Customers</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-wrapper mb-30">
							<div class="counter-img">
								<img src="assets/img/counter/2.png" alt="" />
							</div>
							<div class="counter-text">
								<h2 class="counter">440</h2>
							</div>
							<span class="customers">COMPLET PROJECTS</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-wrapper mb-30">
							<div class="counter-img">
								<img src="assets/img/counter/3.png" alt="" />
							</div>
							<div class="counter-text">
								<h2 class="counter">100</h2>
							</div>
							<span class="customers">AWARDS WINNING</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-wrapper mb-30">
							<div class="counter-img">
								<img src="assets/img/counter/4.png" alt="" />
							</div>
							<div class="counter-text">
								<h2 class="counter">720</h2>
							</div>
							<span class="customers">WORKERS EMPLOYED</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- counter-area-end -->
		<!-- recent-work-area-start -->
		<div class="recent-work-area ptb-120 gray-bg ">
			<div class="container">
				<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>Our Projects</h4>
					<h2>Recent Work</h2>
				</div>
				<div class="row">
					<div class="works-active owl-carousel">
						<div class="col-md-12">
							<div class="work-wrapper">
								<div class="work-img">
									<a href="#"><img src="assets/img/work/1.jpg" alt="" /></a>
									<div class="work-text">
										<h3><a href="#">Wall Paintings</a></h3>
										<span>www.devitems.com</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="work-wrapper">
								<div class="work-img">
									<a href="#"><img src="assets/img/work/2.jpg" alt="" /></a>
									<div class="work-text">
										<h3><a href="#">Wall Paintings</a></h3>
										<span>www.devitems.com</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="work-wrapper">
								<div class="work-img">
									<a href="#"><img src="assets/img/work/3.jpg" alt="" /></a>
									<div class="work-text">
										<h3><a href="#">Wall Paintings</a></h3>
										<span>www.devitems.com</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="work-wrapper">
								<div class="work-img">
									<a href="#"><img src="assets/img/work/2.jpg" alt="" /></a>
									<div class="work-text">
										<h3><a href="#">Wall Paintings</a></h3>
										<span>www.devitems.com</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- recent-work-area-end -->
		<!-- blog-area-start -->
		<div class="blog-area pt-120 pb-90">
			<div class="container">
				<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>blog</h4>
					<h2>Latest News</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/1.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/3.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- blog-area-start -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area gray-bg pt-100 pb-70">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 pr-0">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">about us</h2>
								<div class="footer-text">
									<p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore ma gnall aliqua. Ut enim ad minim. </p>
								</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 col-sm-4">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">SUPPORT</h2>
								<ul class="footer-menu">
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Forums</a></li>
									<li><a href="#">Language Packs</a></li>
									<li><a href="#">Release Status</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 hidden-sm">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">link</h2>
								<ul class="footer-menu">
									<li><a href="#">Our Company</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Recent Work</a></li>
									<li><a href="#">Latest News</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">address</h2>
								<ul class="footer-link">
									<li><i class="fa fa-phone"></i><span>1st floor dhaka bangladesh</span></li>
									<li><i class="fa fa-envelope-open"></i><span>(801) 2345 - 6789</span></li>
									<li><i class="fa fa-envelope-open"></i><span>admin@yourmail.com</span></li>
									<li><i class="fa fa-clock-o"></i><span>Sat - Fry: 9:00 am- 2:00pm</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			<div class="footer-bottom-area gray-bg-1 ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © 2017 <a href="https://freethemescloud.com/">Free themes Cloud</a> All Right Reserved.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="footer-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-tumblr"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area-end -->
		</footer>
        <!-- all js here -->
        <script src="/js/app.js"></script>
        <script src="/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/headline.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/jquery.scrollUp.min.js"></script>
        <script src="/js/isotope.pkgd.min.js"></script>
        <script src="/js/imagesloaded.pkgd.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/jquery.parallax-1.1.3.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.meanmenu.js"></script>
        <script src="/js/ajax-mail.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
