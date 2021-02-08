<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactPostRequest;

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

   public function submitContact(ContactPostRequest $request)
   {
      $request->validated();


   }
}
