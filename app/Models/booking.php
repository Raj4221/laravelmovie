<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table="bookings";

    public $primarykey='b_id';

    use HasFactory;
    protected $fillable = ['t_id','member_id','seatno','time','totalperson','date'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
