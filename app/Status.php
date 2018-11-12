<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";

    public function user() {
        return $this->hasOne('App\User','id','id_user');
    }
}
