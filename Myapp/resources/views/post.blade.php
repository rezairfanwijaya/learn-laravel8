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
    {{-- <h5>by: {{ $post["author"] }}</h5> --}}
    <div class="text-white">
        {!! $post->full !!}
    </div>

    <a href="/blog">Back</a>
@endsection
