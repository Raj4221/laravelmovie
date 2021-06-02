<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    use HasFactory;

    protected $table="actors";

    public $primarykey='a_id';

    protected $fillable = ['movie_id','name','bio','dob'];

    public function movies(){
        return $this->belongsTo('App\Models\movie');
    }
}
