@extends('site.layouts.headerFooter')

@section('titulo', 'Supremo Digital - Aplicação web - Criação de Sites - Desenvolvimento de site - Marketing Digital -
    Aplicação Web')
@section('descricao', 'Supremo Digital é um estúdio de Criação de sites, Marketing digital, Desenvolvimento de Sistema e
    App, sediada em São Paulo com mais de 12 anos de mercado. Desenvolvemos trabalhos interligados nas diversas mídias:
    Design Gráfico, Web Sites, Sistema Web, Campanhas e Ações de Marketing digital.')

@section('css')

    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/responsive.css') }}">
    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
@endsection

@section('js')
    <!-- modernizr js -->
    <script src="{{ asset('site/assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('site/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('site/assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('site/assets/js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('site/assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('site/assets/js/owl.carousel.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('site/assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('site/assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('site/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('site/assets/js/waypoints.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('site/assets/js/swiper.min.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('site/assets/js/particles.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('site/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('site/assets/js/plugins.js') }}"></script>
    <!-- pointer js -->
    <script src="{{ asset('site/assets/js/pointer.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('site/assets/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('site/assets/js/main.js') }}"></script>

    <script src="{{ asset('site/assets/js/insta.js') }}"></script>
    <script type="text/javascript">
        var feed = new Instafeed({
        accessToken: 'IGQVJXdElOUmk0dTRoYUFRcDBJRmMtN0JzMmR0RlZABZAExHUFFDWVBVRFh4Ry1wd2tFMTVqTS0xbkd1T0sxeDBYcTEzZAlZAYX3UtRXlCWC1QSXpWaHRmSkVxV20wRk8yQkNtWHJnSUZA2S3VscWpwU1gxbgZDZD'
        });
        feed.run();
    </script>
@endsection

@section('content')
    <!-- Slider Section Start -->
    <div class="rs-slider style1">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
            data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
            data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
            data-md-device-nav="true" data-md-device-dots="false">
            <div class="slider-content slide1">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            Top-North Software</div>
                        <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                            Development</h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            Using modern technogoly & modern frameworks
                        </div>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                            <a class="readon learn-more slider-btn" href="about.html">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content slide2">
                <div class="container">
                    <div class="content-part text-center">
                        <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We
                            Increase Your</div>
                        <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                            Business Success</h1>
                        <div class="sl-desc fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            Using modern technogoly and IT Services
                        </div>
                        <ul class="slider-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="3000ms">
                            <li><a class="readon learn-more slider-btn" href="about.html">Free Consultation</a></li>
                            <li>
                                <div class="slider-video">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Services Section Start -->
    <div class="rs-services main-home style1 pt-100 md-pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <img src="{{ asset('site/assets/images/services/style1/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title"><a href="web-development.html">IT Management</a></h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <img src="{{ asset('site/assets/images/services/style1/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title"><a href="web-development.html">Cloud Services</a></h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <img src="{{ asset('site/assets/images/services/style1/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title"><a href="web-development.html">Data Security</a></h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <img src="{{ asset('site/assets/images/services/style1/4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title"><a href="web-development.html">Machine Learning</a></h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    @component('site.components.sobre', ['sobre' => $AllDepoimentos])
    @endcomponent

    @component('site.components.servicos', ['servicos' => $AllDepoimentos])
    @endcomponent

    <!-- Call Us Section Start -->
    <div class="rs-call-us bg1 pt-120 md-pt-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6">
                    <div class="image-part">
                        <img src="{{ asset('site/assets/images/call-us/contact-here.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-contact-box text-center">
                        <div class="address-item mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="sec-title3">
                            <span class="sub-text">CALL US 24/7</span>
                            <h2 class="title">(+123) 456-9989</h2>
                            <p class="desc">Have any idea or project for in your mind call us or schedule a appointment. Our
                                representative will reply you shortly.</p>
                        </div>
                        <div class="btn-part mt-40 md-mb-60">
                            <a class="readon lets-talk" href="contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Us Section Start -->

    <!-- Counter Section Start -->
    <div class="rs-counter main-counter-home">
        <div class="counter-top-area text-center bg2">
            <div class="row">
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count k">80</span>
                            </div>
                            <h3 class="title">Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">50</span>
                            </div>
                            <h3 class="title">Companies</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">230</span>
                            </div>
                            <h3 class="title">Projects Done</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Process Section Start -->
    <div class="rs-process pt-180 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 md-mb-40">
                    <div class="process-wrap bg3">
                        <div class="sec-title mb-30">
                            <div class="sub-text new">Working Process</div>
                            <h2 class="title white-color">
                                Our Working Process - How We Work For Our Customers
                            </h2>
                        </div>
                        <div class="btn-part mt-40">
                            <a class="readon learn-more contact-us" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-30 md-pl-15">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        1.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title"> Discovery</h3>
                                    </div>
                                    <p class="number-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac
                                        nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        2.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Planning</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac
                                        nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 sm-mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        3.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Execute</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac
                                        nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        4.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Deliver</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac
                                        nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- Project Section Start -->
    <div class="rs-project bg5 style1 pt-120 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45 md-mb-30">
                <span class="sub-text white-color">Project</span>
                <h2 class="title white-color">
                    We Are Offering All Kinds of IT Solutions Services
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
                data-md-device-dots="false">
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/1.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Project Design</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/2.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Product Engineering</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/3.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Analytic Solutions</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/4.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Growth Strategies</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/5.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Platform Integration</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img src="{{ asset('site/assets/images/project/main-home/6.jpg') }}"
                                alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Innovative Interfaces</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Section End -->

    @component('site.components.depoimento', ['depoimentos' => $AllDepoimentos])
    @endcomponent

    <!-- INICIO LISTA BLOG -->
    <div id="rs-blog" class="rs-blog pb-120 pt-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Blogs</span>
                <h2 class="title testi-title">
                    Read Our Latest Tips & Tricks
                </h2>
                <div class="heading-line">

                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/1.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Software Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual Court
                                System</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/2.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html"> Web Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to Stay at
                                Home</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/3.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More Openings
                                Fewer</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/4.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Artifical Intelligence</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes Them
                                Effective</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/5.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Digital Technology</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction, Balk at
                                Cost</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('site/assets/images/blog/main-home/6.jpg') }}" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux Foundation Fold
                                Desco</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM LISTA BLOG -->
    <div id="instafeed"></div>



@endsection
