@extends('layouts.main')
@section('content')
    {{-- <a href="{{ route('show.prodi', $prodi->id) }}"><< Kembali</a> --}}
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">{{ $fakultas->nama_fakultas }}</li>
          <li class="breadcrumb-item">{{ $prodi->nama_prodi }}</li>
        </ol>
    </div>
    <hr>
    <h3>Prodi: {{ $prodi->nama_prodi }}</h3>
    <ul>
        @foreach ($prodi->mataKuliahs as $mataKuliah)
            <li>
                <h3><a href="{{ route('show.course', $mataKuliah->id) }}">{{ $mataKuliah->nama_mata_kuliah }}</a></h3> <small>{{ $mataKuliah->dosen->nama_dosen }}</small>
            </li>
        @endforeach
        
    </ul>
    
    
@endsection