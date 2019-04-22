<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairmenItem extends Model
{
    //
    protected $primaryKey = 'RepmenItemId';
    public $timestamp = false;
    protected $fillable = ['RepmenItemId','DateOrdered','Quantity','TotalCost','ItemId','RepairmenId'];

    public function Item()
    {
      // code...
      return $this->belongsTo('App\Item');
    }

    public function Repairmen()
    {
      // code...
      return $this->belongsTo('App\Repairmen');
    }
}
