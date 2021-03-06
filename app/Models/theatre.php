<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theatre extends Model
{
    use HasFactory;
    public function member(){
        return $this->belongsTo('App\Models\member');
    }

    public function movies(){
        return $this->belongsTo(movie::class);
    }
}
