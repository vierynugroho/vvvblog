<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $about_data = [
        'title' => 'About',
        'name' => 'Viery Nugroho',
        'email' => 'viery15102002@gmail.com',
        'photo' => 'vierynugroho.jpg'
    ];

    public static function about_data()
    {
        return collect(self::$about_data);
    }

}