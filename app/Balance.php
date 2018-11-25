<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //
    protected $table ='balance';
    protected $primaryKey='balanceId';
    protected $timeStamps = false;
}
