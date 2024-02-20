@extends('layouts.app')
@section('content')
<main class="login-form">
    <section class="hero-section set-bg" data-setbg="assets/img/hero-bg.jpg " class="register-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text bg-light">
                        <div class="section-title">
                            <h2>Login</h2>
                            <p>The First 7 Day Trial Is Completely Free With The Teacher</p>
                        </div>
                        <form action="#" class="register-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name">
                                
                                
                                    <label for="email">Your email address</label>
                                    <input type="text" id="email">
                                </div>
                            </div>
                            <button type="submit" class="register-btn">Get Started</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="assets/img/register-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection