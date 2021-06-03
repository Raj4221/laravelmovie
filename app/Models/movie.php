<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class movie extends Model
{
    use HasFactory;

    protected $table="movies";

    protected $fillable = ['id','name','description','director','rate','image'];

    public function actors(){
        return $this->hasMany('App\Models\actor');
    }
    public function theatres(){
        return $this->hasMany(theatre::class,'m_id','id');
    }
}
