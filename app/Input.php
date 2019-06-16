<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
	protected $table = 'input';
    protected $fillable = ['id','firstname', 'lastname', 'title', 'description'];
}
