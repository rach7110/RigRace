<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Boat;
use App\Race;

class Result extends Model
{
    protected $fillable = ['eventname', 'venue', 'start_date', 'end_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boats()
    {
        return $this->hasMany(Boat::class);
    }

    public function races()
    {
        return $this->hasMany(Race::class);
    }
}
