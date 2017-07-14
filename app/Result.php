<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Result extends Model
{
    protected $fillable = ['eventname', 'venue', 'start_date', 'end_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
