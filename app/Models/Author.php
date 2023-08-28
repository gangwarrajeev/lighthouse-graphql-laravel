<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name',
        'author_type',
        'status',
    ];
    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
