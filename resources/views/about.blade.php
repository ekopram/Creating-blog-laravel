@extends('layouts.main')

@section('container')
<h1>halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $images}}" alt="{{ $name }}" width="1000" >

@endsection