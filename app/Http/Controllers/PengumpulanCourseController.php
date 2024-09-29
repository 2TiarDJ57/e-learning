<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PengumpulanCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PengumpulanCourseController extends Controller
{
    public function store(Course $course, Request $request)
    {
        // Validasi
        $request->validate(
            [
            'pengumpulanCourse' => 'required|mimes:doc,docx,pdf|max:2048',
            ],
            [
                'pengumpulanCourse.mimes' => 'Format data harus doc, docx, pdf',
                'pengumpulanCourse.max' => 'Masimal data file 2mb',
                'pengumpulanCourse.required' => 'Maaf file tugas tidak boleh kosong',
            ]
        );

        // Penyimpanan File
        $file = $request->file('pengumpulanCourse');

        // Penamaan File
        $nameFile = explode('.', $file->getClientOriginalName());
        

        // Penamaan Path File
        $pathFile = time() . '_' . $nameFile[0] . '.' . $file->getClientOriginalExtension();

        // Penyimpanan di Disk Local
        Storage::disk('local')->put('public/' . $pathFile, file_get_contents($file));

        // Penyimpanan data di DB
        PengumpulanCourse::create([
            'mahasiswa_id' => 1,
            'course_id' => $course->id,
            'file_pengumpulan_course' => $pathFile,
        ]);

        return Redirect::back();
    }
}
