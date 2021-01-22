<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function espanol() {
    return view('holaTodo');
  }

  public function espanolTu() {
    return view('holaTu', [
      'name' => 'Sancho Panza'
    ]);
  }

}
