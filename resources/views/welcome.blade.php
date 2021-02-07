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
                           <p class="font-weight-bold lead text-muted mb-1"><strong>Cédric Lima</strong></p>
                           <p class="font-weight-bold text-muted">Développeur Web PHP Laravel / Symfony</p>
                        </div>
                     </div>
                  </div>
         </div>
   </div>
{{-- Fin presentation --}}

{{-- Parcours --}}

<div class="container bg-white z-depth-1 my-5 py-5 px-4 px-lg-0">
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
 <div class="container z-depth-1 my-5 p-5">

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
@endsection
