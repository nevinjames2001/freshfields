<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    protected $table='veterinarian';
    protected $fillable=['veterinarian_id','veterinarian_name'];

    public $timestamps=false;

}
