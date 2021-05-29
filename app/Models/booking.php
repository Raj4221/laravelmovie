<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = ['m_id','u_id','TheatreName','seatno','time','totalperson','date'];
}
