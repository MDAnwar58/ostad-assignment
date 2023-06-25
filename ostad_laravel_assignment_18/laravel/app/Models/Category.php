<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    function posts()
    {
        return $this->hasMany(Post::class);
    }

    function getLatestPost()
    {
        // latest method is not working here and then I will Implement orderBy method.
        return $this->posts()->orderBy('id', 'desc')->get();
    }
}
