<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'lastName', 'email', 'phone', 'neighborhood', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function sons()
    {
        return $this->hasMany(Son::class);
    }
}
