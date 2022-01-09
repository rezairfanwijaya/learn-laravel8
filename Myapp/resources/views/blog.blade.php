@extends('layouts.main')

<style>
    p,
    h2,
    h5 {
        color: white
    }

</style>

{{-- untuk vardumb --}}
{{-- @dd($posts) --}}
@section('konten')

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts-{{ $post->slug }}">{{ $post->judul }}</a>
            </h2>
            <p>Oleh : {{ $post->penulis }}</p>
            <p>Diunggah pada : {{ $post->created_at }}</p>
            {{-- <h5>Penulis : {{ $post['author'] }}</h5> --}}
            <p>{{ $post->partial }}</p>
            <p class="mt-2">
                <a href="/posts-{{ $post->slug }}">read more</a>
            </p>
        </article>
    @endforeach
@endsection
