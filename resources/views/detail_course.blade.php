@extends('layouts.main')
@section('content')
    <h2 class="fw-bold">Course Mata Kuliah {{ $matakuliah->nama_mata_kuliah }}</h2>
    <small>Pengajar: {{ $course->dosen->nama_dosen }}</small> 
    <hr>
    <h3 class="fw-bold text-primary">{{ $course->nama_course }}</h3>
    
    <h4 class="fw-bold">Description:</h4>
    <p>{!! $course->description !!}</p>
    <hr>
    <h4 class="fw-bold">File Tugas:</h4>
    <a href="{{ route('download.tugas', $course) }}">{{ $course->file_tugas }}</a>
    <hr>
    <h4 class="fw-bold">Materi:</h4>
    <a href="{{ route('download.materi', $course) }}">{{ $course->materi }}</a>
    <hr>
    <h4 class="fw-bold">Pengumpulan Tugas:</h4>

    <form action="{{ route('store.pengumpulan', $course) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="input-group mb-3">

            @if (false)
                <div class="alert alert-success" role="alert">
                    Anda sudah mengumpulkan tugas! <a href="">Cancel</a>
                </div>
            @else
                <input type="file" name="pengumpulanCourse" class="form-control @error('pengumpulanCourse') is-invalid @enderror" id="pengumpulanCourse">
            @endif
            

            @error('pengumpulanCourse')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection