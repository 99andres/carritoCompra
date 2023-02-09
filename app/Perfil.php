<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //
    function users(){
        return $this->hasMany(User::class);
    }
}
