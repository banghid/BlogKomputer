<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Transformers\CustomerTransformer;

class CustomerController extends Controller
{
    //

    public function getCustomer()
    {
      // code...
      $data = Customer::all();
      return view('konten.tampil-costumer')->with('data', $data);

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
      $customer = \App\Customer::create($request->only('LastName','FirstName','Email','Mobile','HTel','AddressLine1','AddressLine2','City','State','PostCode'));
      return redirect()->back();
    }

    public function deleteCustomer(Customer $customer)
    {
      // code...
      $computer = \App\Computer::where('CustomerId', $customer->CustomerId);
      $computer->delete();
      $customer->delete();
      return redirect()->back();
    }

    public function editCustomer(Customer $customer,Request $request)
    {
      // code...
      $customer->fill($request->only('LastName','FirstName','MI','Email','Mobile','HTel','AddressLine1','AddressLine2','City','State','PostCode'));
      $customer->save();
      return redirect()->back();
    }

    public function index()
    {
      // code... untuk api fungsi mengambil data yang ada di tabel customer

      $customers = Customer::all();

      return fractal()
              ->collection($customers)
              ->transformWith(new CustomerTransformer)
              ->toArray();
    }


}
