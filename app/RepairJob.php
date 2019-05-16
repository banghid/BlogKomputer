<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairJob extends Model
{
    //
    protected $table = 'RepairJobs';
    protected $primaryKey = 'JobNum';
    public $timestamps = false;
    protected $fillable = ['JobNum','DateReceived','DateReturned','DateEnded','LabourCost','TotalCost','CustomerId','ComputerId'];

    public function RepairJobItems()
    {
      // code...
      return $this->hasMany('App\RepairJobItem','JobNum','JobNum');
    }

    public function Deposits()
    {
      // code...
      return $this->hasMany('App\Deposit','JobNum','JobNum');
    }

    public function Payments()
    {
      // code...
      return $this->hasMany('App\Payment','JobNum','JobNum');
    }

    public function Customer()
    {
      // code...
      return $this->belongsTo('App\Customer','CustomerId');
    }

    public function Computer()
    {
      // code...
      return $this->belongsTo('App\Computer','ComputerId');
    }
}
