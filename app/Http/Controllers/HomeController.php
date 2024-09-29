<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home',
            'fakultas' => Fakultas::all(),
        ]);
    }

    public function showProdiFromFakultas(Fakultas $fakultas)
    {
        return view('show_prodi_from_fakultas', [
            'title' => 'Prodi',
            'fakultas' => $fakultas->load('prodies'),
        ]);
    }

    public function showMataKuliahFromProdi(Fakultas $fakultas, Prodi $prodi, Course $course)
    {
        return view('show_matakuliah_from_prodi', [
            'title' => 'Mata Kuliah',
            'prodi' => $prodi,
            'fakultas' => $fakultas,
            'course' => $course
        ]);
    }
}
