<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $appends = ['name'];

    public function movies() {
        return $this->hasMany(Movie::class);
    }

    public function getNameAttribute() {
        return $this->firstname . ' ' . $this->lastname;
    }
}