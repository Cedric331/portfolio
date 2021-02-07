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
                         <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           <div>
                                <p class="font-weight-bold lead text-muted mb-1"><strong>Cédric Lima</strong></p>
                                <p class="font-weight-bold text-muted">Développeur web PHP Laravel / Symfony</p>
                           </div>
                        </div>
                     </div>
                  </div>
         </div>
   </div>
{{-- Fin presentation --}}

{{-- Parcours --}}

<div class="container z-depth-1 my-5 py-5 px-4 px-lg-0">
   <section>
     <h3 class="font-weight-bold text-center dark-grey-text pb-2">Mon Parcours</h3>
     <hr class="w-header my-4">
     <div class="row">
       <div class="col-lg-8 mx-auto">
         <ol class="timeline">
         @foreach ( $parcours as $element )

           <li class="timeline-element">
             <h5 class="font-weight-bold dark-grey-text mb-3">{{ $element->titre }}</h5>
             <p class="grey-text font-small">Technologies : <em>{{ $element->techno }}</em></p>
             <p class="grey-text font-small">Entreprise : <em>{{ $element->entreprise }}</em></p>
             <p class="grey-text font-small"><em>{{ $element->duree }}</em></p>
             <p class="text-muted">{{ $element->description }}</p>
           </li>

         @endforeach
         </ol>
       </div>
     </div>
   </section>
 </div>

 {{-- Fin Parcours --}}

@endsection
