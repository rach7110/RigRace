<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['eventname', 'host', 'start_date', 'end_date', 'user_id'];
}
