<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination_activitie extends Model
{
    protected $table = "destination_activities";
    protected $fillable = ['id_destination', 'id_activities'];
    public $timestamps = false;
}
