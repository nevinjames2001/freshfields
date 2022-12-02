<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantsGallery extends Model
{
    protected $table='plants_table';
    protected $fillable=['id','name','harvest','yield','irrigation','image','season','preparation','cultivation','pestManagement'];

    public $timestamps=false;

}
