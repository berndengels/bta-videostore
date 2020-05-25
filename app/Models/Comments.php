<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
