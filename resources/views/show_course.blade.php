@extends('layouts.main')
@section('content')
    <h2 class="fw-bold">Course</h2>
    <hr>
    <h3>Mata Kuliah: {{ $matakuliah->nama_mata_kuliah }}</h3>
    <small>Pengajar: {{ $matakuliah->dosen->nama_dosen }}</small>
    <a href="{{ route('create.course', $matakuliah->id) }}" class="fw-bold">Create Course</a>
    <ul>

        @forelse ($matakuliah->courses as $course)
        <li>
            <div class="row">
                <div class="col-md-8">
                    <h3><a href="{{ route('detail.course', [$course->mataKuliah->id, $course->id]) }}">{{ $course->nama_course }}</a></h3>
                </div>
                <div class="col-md-4">
                    <form action="" method="post" class="d-inline">
                        @csrf
                        @method('update')
        
                        <button type="submit" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>
                    </form>

                    <form action="{{ route('destroy.course', [$course->mataKuliah->id, $course->id]) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
        
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </li>
        @empty
        <div class="alert alert-danger mt-3" role="alert">
            Tidak Ada Course!
        </div>
        @endforelse
        
    </ul>
@endsection