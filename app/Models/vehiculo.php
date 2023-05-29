<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    public $timestamps = FALSE;
    protected $table = 'tiposvehiculo';
    protected $filiable = ['marca','Modelo','tipo'];

    use HasFactory;
}
