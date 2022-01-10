@extends('layouts.main')

<style>
    p,
    h2,
    h5 {
        color: #fff;
    }

</style>
@section('konten')

    <h2>{{ $post->judul }}</h2>
    <p>Oleh {{ $post->penulis }} dalam <a href="/categories-{{ $post->category->slug }}">{{ $post->category->nama }}</a></p>
    <div class="text-white">
        {!! $post->full !!}
    </div>

    <a href="/blog">Back</a>
@endsection
