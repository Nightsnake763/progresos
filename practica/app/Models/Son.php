<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    protected $fillable = ['name', 'age', 'person_id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
