<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DownloadFileController extends Controller
{
    public function fileTugas(Course $course)
    {   
        $fileName = explode('_', $course->file_tugas);

        return Storage::download('public/' . $course->file_tugas, $fileName[1]);

    }

    public function fileMateri(Course $course)
    {
        $fileName = explode('_', $course->materi);
        return Storage::download('public/' . $course->materi, $fileName[1]);
    }
}
