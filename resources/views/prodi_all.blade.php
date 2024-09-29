@extends('layouts.main')
@section('content')
<h3>Prodi: </h3>
<ul>
    @foreach ($prodi as $prd)
        <li> <h4><a href="">{{ $prd->nama_prodi }}</a></h4> </li>
    @endforeach
    
</ul>

    
@endsection