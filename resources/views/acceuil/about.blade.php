@extends('layouts.app')

@section('title','About|fitnessHub')

@section('content')
    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <div style="font-size: 2em; color: white; display: flex; margin-top: 0.3em">fitness<div style="color: #f15d44;">Hub</div></div>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li ><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active"><a href="{{ route('acceuil.about') }}">About</a></li>
                        <li><a href="{{ route('acceuil.classes') }}">Classes</a></li>
                        <li><a href="{{ route('acceuil.contact') }}">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets/img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="assets/img/about-pic.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="assets/img/play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                            sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                            cursus a amet.</p>
                        <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida
                            quam semper libero sit amet.</p>
                        <img src="assets/img/about-signature.png" alt="">
                        <div class="at-author">
                            <h4>Lettie Chavez</h4>
                            <span>CEO - Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Counter Section Begin -->
    <div class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-counter-text">
                        <div class="single-counter">
                            <h1 class="counter-num count">98</h1>
                            <p>Programs</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">14</h1>
                            <p>Locations</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">50</h1>
                            <span>k+</span>
                            <p>Members</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">34</h1>
                            <p>Coaches</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Counter Section End -->

    <!-- Gym Award Section Begin -->
    <section class="gym-award spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="award-text">
                        <h2>Best gym award</h2>
                        <p>Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium sollicitudin,
                            nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate cursus a
                            amet.</p>
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida quam semper libero
                            sit amet. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida quam
                            semper libero sit amet.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/award.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Gym Award Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="assets/img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Get training today</h2>
                        <p>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry’s standard.</p>
                        <a href="#" class="primary-btn banner-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="assets/img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Trainer Section Begin -->
    <section class="trainer-section about-trainer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT TRAINERS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="assets/img/trainer/about-trainer-1.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Patrick Cortez</h5>
                            <span>Leader</span>
                            <p>non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="assets/img/trainer/about-trainer-2.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Gregory Powers</h5>
                            <span>Gym coach</span>
                            <p>non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="assets/img/trainer/about-trainer-3.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Walter Wagner</h5>
                            <span>Dance trainer</span>
                            <p>non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

    <!-- Footer Banner Section Begin -->
    <section class="footer-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="assets/img/footer-banner/footer-banner-1.jpg">
                        <span>New member</span>
                        <h2>7 days for free</h2>
                        <p>Complete the training sessions with us, surely you will be happy</p>
                        <a href="#" class="primary-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="assets/img/footer-banner/footer-banner-2.jpg">
                        <span>contact us</span>
                        <h2>09 746 204</h2>
                        <p>If you trust us on your journey they dark sex does not disappoint you!</p>
                        <a href="#" class="primary-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>(123) 118 9999 - (123) 118 9999</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>72 Kangnam, 45 Opal Point Suite 391</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>contactcompany@Gutim.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="assets/img/footer-signup.jpg">
                <div class="so-text">
                    <h4>Subscribe To Our Mailing List</h4>
                    <p>Sign up to receive the latest information </p>
                </div>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    </body>


@endsection
