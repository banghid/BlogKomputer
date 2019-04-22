<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repairmen extends Model
{
    //
    protected $table = 'Repairmen';
    protected $primaryKey = 'RepairmenId';
    public $timestamp = false;
    protected $fillable = ['RepaimenId','LastName','FirstName','MI','Email','Mobile','HTel'];

    public function RepairmenItems()
    {
      // code...
      return $this->hasMany('App\RepairmenItem');
    }

    public function RepairJobRepairmen()
    {
      // code...
      return $this->hasMany('App\RepairJobRepairmen');
    }
}
