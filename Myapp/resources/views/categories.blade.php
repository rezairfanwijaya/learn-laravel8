@extends('layouts.main')

@section('konten')
{{-- @dd($categories) --}}
    <ul>
        @foreach ($categories as $category )
            <a href="/categories-{{ $category->slug }}">
                <li>{{ $category->nama }}</li>
            </a>
        @endforeach
        
    </ul>
@endsection