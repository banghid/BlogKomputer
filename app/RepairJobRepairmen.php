<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairJobRepairmen extends Model
{
    //
    protected $table = 'RepairJobRepairmen';
    public $timestamps = false;
    protected $primaryKey = 'RepJobMenId';
    protected $fillable = ['RepJobMenId','DateStarted','DateEnded','Comments','JobNum','RepairmenId'];

    public function RepairJob()
    {
      // code...
      return $this->belongsTo('App\RepairJob');
    }

    public function Repairmen()
    {
      // code...
      return $this->belongsTo('App\Repairmen');
    }
}
