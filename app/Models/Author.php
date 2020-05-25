<?php
// app/Models/Author.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $fillable = ['firstname','lastname'];
    protected $appends = ['name'];
    // habe keine spalten created_at, updated_at
    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function movies() {
        return $this->hasMany(Movie::class);
    }

    /**
     * @return string
     */
    public function getNameAttribute() {
        return $this->firstname . ' ' . $this->lastname;
    }
}
