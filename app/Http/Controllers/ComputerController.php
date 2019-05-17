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
      $data['computer'] = Computer::all();
      return view('konten.tampil-computer')->with('data', $data);
    }

    public function inputComputer(Request $request)
    {
      // code...
      $computer = \App\Computer::create($request->only('SerialNum','Model','CustomerId'));
      return redirect()->route('computer.tampil');
    }

    public function editComputer(Computer $computer,Request $request)
    {
      // code...
      $computer->fill($request->only('SerialNum','Model','CustomerId'));
      $computer->save();
      return redirect()->route('computer.tampil');
    }
}
