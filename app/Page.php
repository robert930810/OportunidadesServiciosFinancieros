<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
 
    //protected $timestamp = false; remove if you want no timestamp on table
 
    protected $fillable = ['name', 'description','content'];
}
