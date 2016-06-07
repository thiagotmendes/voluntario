<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Usuario extends Controller
{
  public function getHome($nome)
  {
   return view('inicio')->with(['nome' => $nome]);
  }

  public function anyPing()
  {
   return'ping';
  }
}
