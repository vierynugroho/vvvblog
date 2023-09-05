<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    // atribut kunci model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function blog()
    {
        // return $this->hasMany(Blog::class);
        return $this->hasMany(Blog::class, 'category_id');
    }

}