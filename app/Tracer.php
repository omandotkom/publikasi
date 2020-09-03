<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracer extends Model
{
    protected $table = "apptraces";
    protected $fillable = ["identity","ip"];
}
