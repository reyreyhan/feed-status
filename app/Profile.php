<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";

    public function user() {
        return $this->hasOne('App\User','id','id_user');
    }
}
