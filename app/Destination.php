<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = "destinations";
    protected $fillable = ['destination_name', 'id_category', 'id_city', 'gallery', 'overview', 'map', 'information'];
    public $timestamps = false;
}
