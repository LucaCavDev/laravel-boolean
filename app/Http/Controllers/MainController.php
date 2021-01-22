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

  public function espanolTu2() {

    $name = 'Don Quisciotte';
    return view('holaTu', compact('name'));
  }


}
