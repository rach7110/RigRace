<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Result;

class Race extends Model
{
    protected $fillable = ['distance', 'start_time'];


    public function result() 
    {
        return $this->belongsTo(Result::class);
    }
    
}