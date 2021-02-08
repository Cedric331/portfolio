<?php

namespace App\Http\Controllers;

use App\Models\Parcours;
use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
   public function home()
   {
      $parcours = Parcours::All();
      $competences = Competence::All();

      return view('welcome', compact('parcours', 'competences'));
   }

   public function download()
   {
      return Storage::download('fichier/CV-CedricLima.pdf');
   }
}
