@extends('layouts.main')
@section('content')
    {{-- <a href="{{ route('home') }}"><< Kembali</a> --}}
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">{{ $fakultas->nama_fakultas }}</li>
        </ol>
    </div>
    
    <hr>

    <h3>Fakultas: {{ $fakultas->nama_fakultas }}</h3>
    <ul>
        @foreach ($fakultas->prodies as $prodi)
            <li><h3><a href="{{ route('show.matakuliah', [$prodi->fakultas, $prodi->id]) }}">{{ $prodi->nama_prodi }}</a></h3></li>
        @endforeach
        
    </ul>
    
    
@endsection