@extends('layouts.app')

@section('title','fitnessHub')

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
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="assets/img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>Bienvenue dans notre apllication de gestion d'une salle de sport</span>
                        <h1>POUR DEBUTER</h1>
                        <p>Veuillez vous inscrire pour enregistrer les informations <br /></p>
                        <a href="" class="primary-btn" data-toggle="modal" data-target="#exampleModal">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->














{{--    <!-- Register Section Begin -->--}}
{{--    <section id="register" class="register-section spad" style="background: #1b1e21">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="register-text">--}}
{{--                        <div class="section-title">--}}
{{--                            <h2>Register Now</h2>--}}

{{--                        </div>--}}
{{--                        <form action="#" class="register-form">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="name">First Name</label>--}}
{{--                                    <input type="text" id="name" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="email">Your email address</label>--}}
{{--                                    <input type="email" id="email" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="last-name">Last Name</label>--}}
{{--                                    <input type="text" id="last-name" required>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="last-name">Password</label>--}}
{{--                                    <input type="password" id="last-name" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="mobile">Password Confirm</label>--}}
{{--                                    <input type="password" id="mobile" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="register-btn">Get Started</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="register-pic">--}}
{{--                        <img src="assets/img/register-pic.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Register Section End -->--}}

    <!-- Modal with form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-text bg-light">
                        <div class="section-title">
                            <h2>Register Now</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>

                        <form action="#" class="register-form ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" name="firstName">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Last Name</label>
                                    <input type="text" id="email" name="lastName">
                                </div>
                                <div class="col-lg-12">
                                    <label for="email">Email</label>
                                    <input type="email" id="em" name="email">
                                </div>

                                <div class="col-lg-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="pwd" name="pwd">
                                </div>

                                <div class="col-lg-6">
                                    <label for="password">Password Retype</label>
                                    <input type="password" id="pr" name="pwdretype">
                                </div>



                            </div>
                            <button type="submit" class="register-btn">SignUp</button>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="assets/img/register-pic.jpg" alt="">
                    </div> --}}
            </div>
        </div>
    </div>
    </div>


@endsection
