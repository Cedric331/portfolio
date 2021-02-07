<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Parcours;
use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function home()
   {
      $parcours = Parcours::All();
      $competences = Competence::All();

      return view('welcome', compact('parcours', 'competences'));
   }
}
