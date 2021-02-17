<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    //
    public function __invoke()
    {
      return view('suggestions');
    }
}
