<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // To allow for mass assignable
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
}
