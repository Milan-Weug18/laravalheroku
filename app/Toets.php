<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toets extends Model
{
     protected $fillable = ['id','docent', 'vak', 'tijd', 'description'];
}
