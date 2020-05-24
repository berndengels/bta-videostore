<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['author_id','title','price'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }
}
