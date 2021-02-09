@extends('layouts/app')

@section('content')


<div class="container mt-5 bg-light p-2">
   <section class="dark-grey-text text-center">
     <h2 class="font-weight-bold mb-4 mt-2 pb-2">Mes Projets</h2>
     <hr class="w-50 m-auto mb-4">
     <div class="row">

      @foreach ( $projects as $project )
       <div class="col-lg-6 col-md-6 mb-4">
         <div class="view overlay rounded mb-4">
           <img class="img-fluid" src="{{ asset('storage/image/'.$project->image) }}" alt="{{ $project->titre }}">
         </div>
 
         <h4 class="font-weight-bold my-3"><strong>{{ $project->titre }}</strong></h4>
         <p class="dark-grey-text text-muted">{{ $project->techno }}</p>
         <p class="dark-grey-text">{{ $project->description }}</p>
         @if ($project->url != 'https://github.com/Cedric331')
            <a href="{{ $project->url }}" class="linkButton btn btn-dark btn-rounded btn-md" target="_blank">Voir le site</a>
         @else
            <a href="https://github.com/Cedric331" class="linkButton btn btn-dark btn-rounded btn-md" target="_blank">Voir sur GitHub</a>
         @endif
       </div>
       @endforeach

     </div>
   </section>
 </div>


@endsection