<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public $timestamps = false;
    public $table='event';

    public function order()
    {
        return $this->hasMany('App\Order','id_event','id');
    }
}
