<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairJob extends Model
{
    //
    protected $primaryKey = 'JobNum';
    public $timestamp = false;
    protected $fillable = ['JobNum','DateReceived','DateReturned','DateEnded','LabourCost','TotalCost','CustomerId','ComputerId'];

    public function RepairJobItems()
    {
      // code...
      return $this->hasMany('App\RepairJobItem');
    }

    public function Deposits()
    {
      // code...
      return $this->hasMany('App\Deposit');
    }

    public function Payments()
    {
      // code...
      return $this->hasMany('App\Payment');
    }

    public function Customer()
    {
      // code...
      return $this->belongsTo('App\Customer');
    }

    public function Computer()
    {
      // code...
      return $this->belongsTo('App\Computer');
    }
}
