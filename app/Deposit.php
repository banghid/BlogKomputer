<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //
    protected $primaryKey = 'DepositNum';
    public $timestamps = false;
    protected $fillable = ['DepositDate','DepositNum','Amount','JobNum'];

    public function RepairJob()
    {
      // code...
      return $this->belongsTo('App\RepairJob','JobNum');
    }
}
