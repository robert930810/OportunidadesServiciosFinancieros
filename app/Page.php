<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public $timestamps = false;

    protected $table = 'pages';
 
<<<<<<< HEAD
    public $timestamps = false;
 
=======
>>>>>>> master
    protected $fillable = ['name', 'description','content'];

  

}
