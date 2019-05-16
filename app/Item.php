<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $primaryKey = 'ItemId';
    public $timestamps = false;
    protected $fillable = ['ItemId','PartNum','Cost','NumInStock'];

    public function RepairmenItems()
    {
      // code...
      return $this->hasMany('App\RepairmenItem','ItemId','ItemId');
    }
}
