<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $primaryKey = 'CustomerId';
    public $timestamps = false;
    protected $fillable = ['CustomerId','LastName','FirstName','MI','Email','Mobile','HTel','AddressLine1','AddressLine2','City','State','PostCode'];

    public function RepairJobs()
    {
      // code...
      return $this->hasMany('App\RepairJob','JobNum','JobNum');
    }

    public function Computers()
    {
      // code...
      return $this->hasMany('App\Computer','ComputerId','ComputerId');
    }
}
