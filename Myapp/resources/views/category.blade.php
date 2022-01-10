@extends('layouts.main')

<style>
    p,
    h2,
    h5 {
        color: #fff;
    }

</style>
@section('konten')

    <h2 class="mb-5">Kategori {{ $category }}</h2>


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

    <a href="/blog">Back</a>

@endsection
