<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $primaryKey = 'PaymentNum';
    public $timestamp = false;
    protected $fillable =['PaymentNum','DepositDate','Amount','JobNum'];

    public function RepairJob()
    {
      // code...
      return $this->belongsTo('App\RepairJob');
    }
}
