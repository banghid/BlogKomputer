<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairJobItem extends Model
{
    //
    protected $table = 'RepairJobItems';
    protected $primaryKey = 'RepJobItemId';
    public $timestamps = false;
    protected $fillable = ['DateUsed','RepJobItemId','Quantity','TotalCost','JobNum','ItemId'];

    public function Item()
    {
      // code...
      return $this->belongsTo('App\Item');
    }

    public function RepairJob()
    {
      // code...
      return $this->belongsTo('App\RepairJob');
    }
}
