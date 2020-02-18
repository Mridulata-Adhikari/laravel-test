<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Role');
    }
    public function role()
    {
        return $this->belongsTo('App\User');
    }
}
