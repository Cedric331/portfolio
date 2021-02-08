<?php

namespace App\Http\Controllers;

use App\Mail\OrderContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

      Mail::to(env('APP_MAIL'))->queue(new OrderContact($request->except('_token')));

      return view('contact' , ['valid' => true]);
   }
}
