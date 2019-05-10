<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function getCustomer()
    {
      // code...
      $data = Customer::all();
      return $data;

    }

    public function getData(Customer $customer)
    {
      // code...
      return [
        'a' => $customer,
        'b' => $customer->Computers()->get()
      ];
    }
}
