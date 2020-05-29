<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title','done'];
    protected $casts = [
        'id'    => 'integer',
        'done'  => 'boolean',
    ];
}
