<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table='bookings';
    protected $fillable=['booking_id','veterinarian_id','name','email','date','phone','reason','timeslot'];

    public $timestamps=false;

}
