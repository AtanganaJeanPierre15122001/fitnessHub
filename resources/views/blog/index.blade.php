@extends('layouts.app')

@section('title','fitnessHub')

@section('content')

<body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .ctr {
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
body{font-family: "Lato", sans-serif}
.mySlides {display: none}
    </style>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Classes</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Blog</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Galery</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
     
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>
    

    <section class="hero-section set-bg " data-setbg="assets/img/hero-bg.jpg">
        <div class="container">
            <div class="row ctr">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>FITNESSHUB</span>
                        <h3>BIENVENU A FITNESSHUB</h3>
                        <p>Salle de sport pour votre bien etre </p>
                        <a href="{{ route('abonement') }}" class="primary-btn">abonne us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Hero Section End -->

</body>


@endsection