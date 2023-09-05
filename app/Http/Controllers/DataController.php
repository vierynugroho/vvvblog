<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;

class DataController extends Controller
{
    public function dataMahasiswa()
    {
        return view('dataMahasiswa', [
            'sub_title' => 'Data',
            'mainData' => DataMahasiswa::mainData(),
        ]);
    }
}