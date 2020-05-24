<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname','lastname'];
    protected $appends = ['name'];
    public $timestamps = false;

    public function movies() {
        return $this->hasMany(Movie::class);
    }

    public function getNameAttribute() {
        return $this->firstname . ' ' . $this->lastname;
    }
}
