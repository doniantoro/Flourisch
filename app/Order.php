<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $timestamps = false;
    public $table='order';

    public function event()
    {
        return $this->belongsTo('App\Event','id_event');
    }
}
