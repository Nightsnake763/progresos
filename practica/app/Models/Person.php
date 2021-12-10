<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //telefono direccion cedula
    protected $fillable = ['name', 'lastName', 'email', 'phone', 'neighborhood'];
}
