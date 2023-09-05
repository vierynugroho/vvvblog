<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;

    private static $mainData = [
        'title' => 'Data',
    ];

    public static function mainData()
    {
        return collect(self::$mainData);
    }
}