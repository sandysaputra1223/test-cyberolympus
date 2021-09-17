<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agent';

    public $timestamps = false;

    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

}
