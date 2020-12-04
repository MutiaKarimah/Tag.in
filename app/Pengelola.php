<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengelola extends Model
{
    // use SoftDeletes;

    protected $table = 'pengelolas';
    protected $primaryKey = 'IDpengelola';

    // protected $dates = ['deleted_at'];
}