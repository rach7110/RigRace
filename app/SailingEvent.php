<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class SailingEvent extends Model
{
    protected $fillable = ['eventname', 'host', 'start_date', 'end_date', 'user_id'];

    protected $table = 'events';

    public function user()
    {
        return $this->belongsTo('User');
    }
}
