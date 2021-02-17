<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendSuggest;
use Illuminate\Suppost\Facades\Mail;

class MailController extends Controller
{
    //
    public function __invoke(){
      $correo = new SendSuggest;

      Mail::to('alguien@correo.com')->send('correo');

      return "Mensaje enviado";
    }
}
