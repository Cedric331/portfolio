<nav class="navbar navbar-expand-lg navbar-dark dark">
   <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Information
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('home') }}#experience">Mes Expériences</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#competence">Mes Compétences</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#diplome">Diplômes et Certificats</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#loisirs">Mes Loisirs</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('projects') }}">Mes Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('download') }}">Télécharger mon CV</a>
          </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="{{ route('contact-form') }}">Contact</a>
         </li>
       </ul>
     </div>
      <div class="d-flex">
         <a class="nav-link text-white" href="https://github.com/Cedric331" target="_blank"><i class="fab fa-github fa-2x"></i></a>
         <a class="nav-link text-white" href="https://www.linkedin.com/in/cedric-lima/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
      </div>
   </div>
 </nav>