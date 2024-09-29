@extends('layouts.main')
@section('content')

  <h3>Fakultas:</h3>
  <ul>
    @foreach ($fakultas as $fklts)
    <li> <h4><a href="{{ route('show.prodi', $fklts->id) }}">{{ $fklts->nama_fakultas }}</a></h4 >  </li>
    @endforeach
  </ul>
@endsection