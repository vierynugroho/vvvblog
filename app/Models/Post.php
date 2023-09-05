<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function single_post($slug)
    {
        $single_post = Blog::posts()->firstWhere('slug', '==', $slug);

        return $single_post;
    }
}