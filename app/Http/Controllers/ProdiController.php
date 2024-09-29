<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('prodi_all', [
            'title' => 'Prodi',
            'prodi' => Prodi::all(),
        ]);
    }
}
