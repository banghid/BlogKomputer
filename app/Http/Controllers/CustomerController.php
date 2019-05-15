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

    public function inputCustomer(Request $request)
    {
      // code...
      $customer = \App\Customer::create($request->only('LastName','FirstName','MI','Email','Mobile','HTel','AddressLine1','AddressLine2','City','State','PostCode'));
      return redirect()->route('costumer.all');
    }

    public function deleteCustomer($id)
    {
      // code...
      Customer::find($id)->delete();
      return redirect()->back();
    }

    public function editCustomer(Customer $customer,Request $request)
    {
      // code...
      $customer->fill($request->only('LastName','FirstName','MI','Email','Mobile','HTel','AddressLine1','AddressLine2','City','State','PostCode'));
      $customer->save();
      return redirect()->back();
    }

    
}
