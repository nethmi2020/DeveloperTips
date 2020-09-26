<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
    protected $table='authors';

    public function posts(){
      return $this->hasMany(posts::class);
    }
}
