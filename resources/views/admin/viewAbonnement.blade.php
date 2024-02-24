@extends('layouts.app')

@section('title','Exercices | fitnessHub')

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
                        <li class="active" ><a href="{{route('admin.viewAbonnement')}}">Abonnement</a></li>
                        <li ><a href="{{route('admin.viewAdminCoach')}}">Coach</a></li>
                        <li><a href="{{ route('admin.viewAdminClient') }}">client</a></li>
                        <li><a href="{{ route('admin.viewEquipement') }}">Equipement</a></li>
                        <li ><a href="{{ route('admin.viewExercices') }}">Exercices</a></li>

                    </ul>
                </nav>
                <a href="{{route('welcome')}}" class="primary-btn signup-btn">Home</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="assets/img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <div class="main-content">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12  ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Liste des Abonnements</h4>
                                                </div>
                                                <div class="card-body">
                                                    @if(Session::has('success'))
                                                        <div class=" alert alert-success" role="alert">
                                                            {{Session::get('success')}}
                                                        </div>
                                                    @endif

                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-md">
                                                            <tr>

                                                                <th>Nom Abonnements</th>
                                                                <th>description</th>
                                                                <th>prix</th>
                                                                <th>duree</th>
                                                                <th>Delete</th>


                                                            </tr>
                                                            @if(isset($abonnements))
                                                                @foreach($abonnements as $key => $abonnement)
                                                                    <tr>

                                                                        <td>{{$abonnement->nom_abonnement}}</td>
                                                                        <td>{{$abonnement->description}}</td>
                                                                        <td>{{$abonnement->prix}}</td>
                                                                        <td>{{$abonnement->durée}}</td>

                                                                        <td><form action="{{route('admin.viewAbonnement', $abonnement->id)}}" method="DELETE" onsubmit="alert('Êtes-vous sûr de vouloir supprimer cet abonnement ?')">@csrf @method('DELETE') <button type="submit" class="btn btn-danger">delete</button></form></td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr> aucuns Abonements enregistré</tr>
                                                            @endif


                                                        </table>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>




                                    </div>

                                </div>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="register-text bg-light">
                    <div class="section-title">
                        <h2>Enregistrer un abonnement</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form method="POST" action="{{route('admin.viewAbonnement')}}" class="register-form ">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name">nom Abonnement</label>
                                <input type="text" id="name" name="nomA" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="name">Description</label>
                                <textarea type="text" id="name" name="descA" required></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="name">Prix</label>
                                <input type="text" id="name" name="prix" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="name">duree Abonnement</label>
                                <select class="form-control" name="duree">
                                    <option value="1mois">1 mois</option>
                                    <option value="5mois">5 mois</option>
                                    <option value="12mois">12 mois</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="name">Exercices inclus dans l'abonnement(maintenez la touche ctrl pour selectionner plusieurs)</label>
                                <select name="exer[]" class="form-control" multiple>
                                    @foreach($exercices as $key => $exercice )
                                        <option value="{{$exercice->nomExercice}}">
                                            {{$exercice->nomExercice}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>



                        </div>
                        <button type="submit" class="register-btn">Enregistrer</button>
                    </form>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="register-pic">
                    <img src="assets/img/register-pic.jpg" alt="">
                </div> --}}
        </div>
    </div>




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
                <<ul>
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
