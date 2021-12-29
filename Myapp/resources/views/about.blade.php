@extends('layouts.main')


@section('konten')

    {{-- main --}}
    <div class="container mt-5">
        <p>Hallo {{ $name }}</p>
        <p>Your email is {{ $gmail }}</p>
        <img src="img/{{ $photo }}" class="valerie img-thumbnail">
    </div>
    {{-- main --}}
@endsection
