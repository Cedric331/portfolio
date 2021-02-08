@extends('layouts/app')

@section('content')

<div class="container p-2 my-5 bg-white">
   <section class="dark-grey-text">

     <h3 class="text-center font-weight-bold mb-4 pb-2">Mes Projets</h3>
     <p class="text-center text-muted w-responsive mx-auto mb-5">Vous pouvez retrouver mes projets ici et également sur mon GitHub.</p>
   
   @foreach ( $projects as $project )
     <div class="row">
       <div class="col-lg-5 mb-lg-0 mb-5">
         <a href="{{ $project->url }}" target="_blank">
            <img src="{{ asset('storage/image/'.$project->image) }}" class="img-fluid rounded z-depth-1 imageProject" alt="{{ $project->titre }}">
         </a>
      </div>

       <div class="col-lg-7">
 
         <ul class="list-unstyled fa-ul mb-0">
            <li class="d-flex justify-content-center pl-4">
               <div>
                 <h3 class="font-weight-bold mb-3">{{ $project->titre }}</h3>
                 <hr>
               </div>
             </li>
           <li class="d-flex justify-content-center pl-4">
             <div>
               <h5 class="font-weight-bold mb-3">Information</h5>
               <p class="text-muted">{{ $project->description }}</p>
             </div>
           </li>
           <li class="d-flex justify-content-center pl-4">
             <div>
               <h5 class="font-weight-bold mb-3">Technologies</h5>
               <p class="text-muted">{{ $project->techno }}</p>
             </div>
           </li>
         @if($project->url != 'null')
            <li class="d-flex justify-content-center pl-4">
              <div>
                <a href="{{ $project->url }}" class="btn btn-primary btn-rounded" target="_blank">Visiter le site</a>
              </div>
            </li>
         @else
            <li class="d-flex justify-content-center pl-4">
               <div>
                 <a href="https://github.com/Cedric331" class="btn btn-primary btn-rounded" target="_blank">Visible sur GitHub</a>
               </div>
            </li>
         @endif
         </ul>
       </div>
     </div>
     <hr class="my-3">
   @endforeach
   </section>
 </div>

@endsection