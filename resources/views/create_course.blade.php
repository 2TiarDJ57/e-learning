@extends('layouts.main')
@section('content')
    <h3 class="fw-bold">Create Course Mata Kuliah {{ $matakuliah->nama_mata_kuliah }}</h3>
    <form action="{{ route('store.course', $matakuliah->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_course" class="form-label">Nama Course</label>
          <input type="text" name="nama_course" class="form-control @error('nama_course') is-invalid @enderror" id="nama_course" placeholder="Nama Course" value="{{ old('nama_course') }}">

          @error('nama_course')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input id="description" type="hidden" name="description">
          <trix-editor input="description" value="{{ old('description') }}"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="file_tugas" class="form-label">File Tugas</label>
            <input type="file" name="file_tugas" class="form-control @error('file_tugas') is-invalid @enderror" id="file_tugas" value="{{ old('file_tugas') }}">

            @error('file_tugas')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="file_materi" class="form-label">Materi</label>
            <input type="file" name="file_materi" class="form-control @error('file_materi') is-invalid @enderror" id="file_materi" value="{{ old('file_materi') }}">

            @error('file_materi')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection