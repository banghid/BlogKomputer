<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //
    protected $primaryKey = 'ComputerId';
    public $timestamps = false;
    protected $fillable = ['ComputerId','SerialNum','Make','Model','ComputerDescription','CustomerId'];

    public function Customer()
    {
      // code...
      return $this->belongsTo('App\Customer');
    }

    public function RepairJobs()
    {
      // code...
      return $this->hasMany('App\RepairJob');
    }
}
