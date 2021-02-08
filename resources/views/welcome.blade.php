@extends('layouts/app')

@section('content')
{{-- Presentation --}}
   <div id="home" class="p-4 text-center">
         <div class="text-white">
                  <div class="col-md-12">
                     <div class="row">
                           <div class="col-lg-4 mb-2 align-items-center">
                              <div class="avatar white d-flex justify-content-center align-items-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                              </div>
                           </div>
                        <div class="col-lg-8 d-flex flex-column justify-content-between">
                         <p class="m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           <div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <p class="font-weight-bold lead mb-1"><strong>Cédric Lima</strong></p>
                           <p class="font-weight-bold">Développeur Web PHP Laravel / Symfony</p>
                        </div>
                     </div>
                  </div>
         </div>
   </div>
{{-- Fin presentation --}}

{{-- Parcours --}}

<div class="container bg-white z-depth-1 my-5 py-5 px-4 px-lg-0" id="experience">
   <section>
     <h2 class="font-weight-bold text-center dark-grey-text pb-2">Mes Expériences</h2>
     <hr class="w-header my-4 bg-primary">
     <div class="row">
      <div class="text-center mb-1"><i class="fas fa-rocket fa-2x"></i></div>
       <div class="col-lg-8 mx-auto">
         <ol class="timeline">
         @foreach ( $parcours as $element )
           <li class="timeline-element">
             <h5 class="font-weight-bold dark-grey-text mb-3">{{ $element->titre }}</h5>
             @if ($element->techno)
               <p class="grey-text font-small">Technologies : <em>{{ $element->techno }}</em></p>
             @endif
             <p class="grey-text font-small">Entreprise : <em>{{ $element->entreprise }}</em></p>
             <p class="grey-text font-small"><em>{{ $element->duree }}</em></p>
             <p class="text-muted">{{ $element->description }}</p>
           </li>
         @endforeach
         </ol>
       </div>
     </div>
     <hr class="w-header bg-primary">
   </section>
 </div>
 {{-- Fin Parcours --}}

 {{-- Compétences  --}}
 <div class="container bg-white z-depth-1 my-5 p-5" id="competence">
   <section>

       <h2 class="font-weight-bold text-center dark-grey-text pb-2">Mes Compétences</h2>
     <hr class="w-header my-4">
     <div class="row dark-grey-text">
 
      @foreach ( $competences as $competence )
         <div class="col-md-6 col-xl-4 mb-4">
            <div class="media">
              <div class="mr-4">
                <img class="img-fluid logo" src="{{ asset('storage/image/'.$competence->image) }}">
              </div>
              <div class="media-body mt-1">
                <h4 class="font-weight-bold">{{ $competence->titre }}</h4>
                <p class="text-muted">{{ $competence->description }}</p>
              </div>
            </div>
         </div>
      @endforeach

     </div>
   </section>
 </div>

 {{-- Fin Compétences --}}

 {{-- Loisirs --}}

 <div class="container bg-white p-2 my-5" id="loisirs">
   <section>
     <h3 class="font-weight-bold text-center dark-grey-text pb-2">Mes Loisirs</h3>
     <hr class="w-header my-4">
 
     <div class="row p-2">
 
       <div class="col-md-6 col-xl-3 mb-4">
         <div class="card text-center bg-success text-white loisir">
           <div class="card-body">
             <p class="mt-4 pt-2"><i class="fas fa-gamepad fa-4x"></i></p>
             <h5 class="font-weight-normal my-4 py-2">Jeux Vidéo</h5>
             <p class="mb-4">Difficile ne pas mettre les jeux vidéo dans mes loirsirs, je suis un joueur depuis tout petit aussi bien sur PC que sur console. Et il est très peu probable que je m'en lasse un jour.</p>
           </div>
         </div>
       </div>

       <div class="col-md-6 col-xl-3 mb-4">
         <div class="card text-center blue text-white loisir">
           <div class="card-body">
             <p class="mt-4 pt-2"><i class="fas fa-chess-knight fa-4x"></i></p>
             <h5 class="font-weight-normal my-4 py-2">Jeux de société</h5>
             <p class="mb-4">C'est juste parfait pour animer les soirées, s'instruire, apprendre à connaître les gens, il n'y a que des avantages à jouer à des jeux de société.
            </p>
           </div>
         </div>
       </div>

       <div class="col-md-6 col-xl-3 mb-4">
         <div class="card text-center bg-dark text-white loisir">
           <div class="card-body">
             <p class="mt-4 pt-2"><i class="fas fa-guitar fa-4x"></i></p>
             <h5 class="font-weight-normal my-4 py-2">Musique</h5>
             <p class="mb-4">Avec des amis, nous avons créé un groupe de musique, nous sommes tous débutants, mais on aime jouer ensemble pour le plaisir de jouer et d'apprendre.</p>
           </div>
         </div>
       </div>

       <div class="col-md-6 col-xl-3 mb-4">
         <div class="card text-center bg-danger text-white loisir">
           <div class="card-body">
             <p class="mt-4 pt-2"><i class="fas fa-film fa-4x"></i></p>
             <h5 class="font-weight-normal my-4 py-2">Cinéphile</h5>
             <p class="mb-4">Comme beaucoup j'adore regarder des films ou des séries en tout genre, d'ailleurs je n'ai pas trop hésité à prendre un abonnement Netflix ou Amazon Prime.
            </p>
           </div>
         </div>
       </div>


     </div>
   </section>
 </div>
 {{-- Fin Loisirs --}}
 <button id="top" onClick="buttonTop()" class="btn btn-dark invisible">
      Revenir en haut
   </button>
@endsection
