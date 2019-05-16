<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;

class ComputerController extends Controller
{
    //
    public function getComputer()
    {
      // code...
      $data = Computer::all();
      return view('konten.tampil-computer')->with('data', $data);
    }
}
