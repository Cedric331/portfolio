<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Retourne formulaire de contact
     *
     * @return void
     */
   public function contact()
   {
      return view('contact');
   }
}
