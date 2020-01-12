<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel_tips_tag extends Model
{
    protected $table = "travel_tips_tags";
    protected $fillable = ['id_travel_tips', 'id_tag'];
    public $timestamps = false;
}
