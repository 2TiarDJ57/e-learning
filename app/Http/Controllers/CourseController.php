<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MataKuliah $matakuliah)
    {
        return view('show_course', [
            'title' => 'Course',
            'matakuliah' => $matakuliah,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MataKuliah $matakuliah)
    {
        return view('create_course', [
            'title' => 'Create Course',
            'matakuliah' => $matakuliah,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MataKuliah $matakuliah)
    {

        $validateData = $request->validate([
            'nama_course' => 'required|max:255',
            'description' => 'required',
            'file_tugas' => 'mimes:doc,pdf,docx|max:2048',
            'file_materi' => 'mimes:doc,pdf,docx|max:2048',
        ], 
        [
            'nama_course.required' => 'Nama course harus di isi!',
            'description.required' => 'Description harus di isi!',
            'file_tugas.mimes' => 'Format File harus .doc, .pdf, .docx',
            'file_materi.mimes' => 'Format File harus .doc, .pdf, .docx',
            'file_tugas.max' => 'Ukuran File Maksimal 2mb',
            'file_materi.max' => 'Ukuran File Maksimal 2mb'
        ]);

        $file_tugas = $request->file('file_tugas');
        $file_materi = $request->file('file_materi');

        // Data tanpa input file
        $dataCourse = [
                'dosen_id' => 1,
                'mata_kuliah_id' => $matakuliah->id,
                'nama_course' => $request->nama_course,
                'description' => $request->description,
                'file_tugas' => $file_tugas,
                'materi' => $file_materi,
        ];

            // Jika hanya file tugas yang di input simpan ke DB
            if ($file_tugas != null) {
                // Nama tugas
                $nameTugas = explode('.', $file_tugas->getClientOriginalName());
                // Path Tugas
                $pathTugas = time() . '_' . $nameTugas[0] . '.' . $file_tugas->getClientOriginalExtension();
                // Penyimpanan di disk local
                Storage::disk('local')->put('public/' . $pathTugas, file_get_contents($file_tugas));
                // Penyimpanan di data array
                $dataCourse['file_tugas'] = $pathTugas;
            }
            
            if ($file_materi != null) {
                // Nama Materi
                $nameMateri = explode('.', $file_materi->getClientOriginalName());
                // Path Materi
                $pathMateri = time() . '_' . $nameMateri[0] . '.' . $file_materi->getClientOriginalExtension();
                // Menyimpan di disk local
                Storage::disk('local')->put('public/' . $pathMateri, file_get_contents($file_materi));
                // Penyimpanan di array
                $dataCourse['materi'] = $pathMateri;
            } 
        
        Course::create($dataCourse);

        return Redirect::route('show.course', $matakuliah->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $matakuliah, Course $course)
    {
        return view('detail_course', [
            'title' => 'Detail Course',
            'course' => $course,
            'matakuliah' => $matakuliah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $matakuliah, Course $course)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $matakuliah, Course $course)
    {
        if ($course->file_tugas != null) {
            unlink(storage_path('app/public/' . $course->file_tugas));
        }

        if ($course->materi != null) {
            unlink(storage_path('app/public/' . $course->materi));
        }

        $course->delete();

        return Redirect::back();
    }
}
