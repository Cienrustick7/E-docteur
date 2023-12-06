<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function contactemail()
   {
     Mail::to('rucienmarayo11@gmail.com')->send(new contactMail());

     return view('email.bar');
   }
}
