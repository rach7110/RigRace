<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Result;

class Boat extends Model
{
    protected $fillable = ['boatname', 'skipper_first', 'skipper_last', 'rating'];

    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
