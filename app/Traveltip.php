<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveltip extends Model
{
    protected $table = "travel_tips";
    protected $fillable = ['title', 'id_admin', 'id_gallery', 'content', 'permalink', 'insert_date', 'update_date'];
    public $timestamps = false;
}
