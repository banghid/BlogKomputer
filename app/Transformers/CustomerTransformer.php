<?php
namespace App\Transformers;

use App\Customer;
use League\Fractal\TransformerAbstract;

/**
 * Transformer untuk mengkonfigurasi struktur data output json pada api agar konsisten
 */
class CustomerTransformer extends TransformerAbstract
{

  public function transform(Customer $customer)
  {
    // code... fungsi dengan konfigurasi struktur data
    return[
      'name' => $customer->FirstName,
      'email' => $customer->Email,
      'phone' => $customer->Mobile
    ];
  }
}


 ?>
