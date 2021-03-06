<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasOne(Person::class);
    }
}
