@extends('layouts.app')

@section('title','fitnessHub')

@section('content')

<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    function afficherFormulaire() {
    document.getElementById('modal').style.display = 'block';
}

function fermerFormulaire() {
    document.getElementById('modal').style.display = 'none';
}
</script>
<style>
body{font-family: "Lato", sans-serif}
.mySlides {display: none}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.reser{
     text-align:center;
     text-decoration:none;
}



</style>
</head>

<body>

<!-- Navbar -->
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

<section class="membership-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>DIFFERENT ABONNEMENT ET TARIF</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Basic</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">FCFA 10000<span>/01 mo</span></h2>
                        <ul>
                        <li>
                              <p>different exercice sportive</p>
                              <span>musculation,fitnes,yoga</span>

                         </li>
                            <li>
                                <p>Duration</p>
                                <span>2 fois/semaine</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>00 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <a  class="primary-btn membership-btn" onclick="afficherFormulaire()">SUBSCRIBE</a>

                       

                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Standard</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">Fcfa 15000<span>/01 mo</span></h2>
                        <ul>
                            
                         <li>
                              <p>different exercice sportive</p>
                              <span>musculation,fitnes,yoga</span>

                         </li>
                         <li>
                                <p>Duration</p>
                                <span>2 a 3 fois/semaine</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn membership-btn" onclick="afficherFormulaire()">SUBSCRIBE</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Premium</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">Fcfa 15000<span>/01 mo</span></h2>
                        <ul>

                         <li>
                              <p>different exercice sportive</p>
                              <span>musculation,fitnes,yoga</span>

                         </li>
                         <li>
                                <p>Duration</p>
                                <span>Ilimite</span>
                            </li>
                            
                            <li>
                                <p>Personal trainer</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn membership-btn" onclick="afficherFormulaire()">SUBSCRIBE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Membership Section End -->

    <!-- Register Section Begin -->
    


<section class="classes-section classes-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>GALERIE FOR SPORT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="assets/img/hero-bg.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>
                            <span><i class="fa fa-user"></i> Ryan Knight</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="assets/img/hero-bg.jpg">
                        <div class="si-text">
                            <h4>Karate</h4>
                            <span><i class="fa fa-user"></i> Kevin McCormick</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>
                            <span><i class="fa fa-user"></i> Randy Rivera</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Dance</h4>
                            <span><i class="fa fa-user"></i> Russell Lane</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Personal Training</h4>
                            <span><i class="fa fa-user"></i> Cole Robertson</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-6.jpg">
                        <div class="si-text">
                            <h4>Weight Loss</h4>
                            <span><i class="fa fa-user"></i> Ryan Scott</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Box</h4>
                            <span><i class="fa fa-user"></i> Chester Bowen</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Cardio</h4>
                            <span><i class="fa fa-user"></i> Jorge Fernandez</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Crossfit</h4>
                            <span><i class="fa fa-user"></i> Chester Bowen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container mt-3 modal" id="modal">
     <div class="modal-content">
     <span class="close" onclick="fermerFormulaire()">&times;</span>
        
          <h2 class="reser">Reservation</h2>
          <form action="/action_page.php" id="monFormulaire">
               <div class="mb-3 mt-3">
                    <label for="Nom">Nom</label>
                    <input type="Nom" class="form-control" id="Nom" placeholder="Entrer votre nom" name="nom">
               </div>
            <div class="mb-3">
               <label for="number">Numbre de Mois:</label>
               <input type="number" class="form-control" id="nbr"  name="date">
            </div>
            <div class="mb-3">
               <label for="dater">Date-reservation</label>
               <input type="date" class="form-control" id="nbr" placeholder="reservation date" name="number">
            </div>
          
               <button type="submit" class="primary-btn membership-btn">Reserver</button>
          </form>
  </div>
</div>
    
       

<!-- Page content -->

</body>

@endsection

     