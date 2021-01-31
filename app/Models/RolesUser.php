<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesUser extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function role()
    {
        return $this->hasMany('App\Models\Role');
    }
}
