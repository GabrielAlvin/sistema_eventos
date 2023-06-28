@extends('layouts.main')

@section('title', 'Apenas um teste')

@section('content')
    @foreach ($eventos as $evento)
        {{ $evento->tittle }} - {{ $evento->description }} - {{ $evento->city }} - {{ $evento->private }} <br>
    @endforeach
@endsection