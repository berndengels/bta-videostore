<?php

namespace App\Models;

use App\Models\Ext\HasUser;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasUser;

    protected $fillable = ['author_id','title','price','created_by','updated_by'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }
}
