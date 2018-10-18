<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidator extends Model
{
    protected $table = 'liquidator';

    protected $fillable = ['creditLine', 'pagaduria', 'age', 'customerType', 'salary', 'idLead'];
}