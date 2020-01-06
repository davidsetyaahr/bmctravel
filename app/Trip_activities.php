<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip_activities extends Model
{
    protected $table = "trip_activities";
    protected $fillable = ['id_activities', 'activities'];
    public $timestamps = false;
}
