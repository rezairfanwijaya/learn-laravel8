@extends('layouts.main')


@section('konten')
<title>Halaman Belajar - {{ $nama }}</title>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap');

    body {
        background-color: #232222;

        font-family: 'Poppins', sans-serif;

    }

    p.welcome {
        color: #eee;
        font-size: 5rem;
        font-weight: 600;
        letter-spacing: 5px;
        animation: welcome 4s forwards;
        position: absolute;
        text-align: center;
        bottom: 0;

    }

    .main {
        animation: main 10s;

    }

    @keyframes welcome {
        0% {
            margin-left: -890px;
        }

        100% {
            visibility: hidden;
            opacity: 0;
        }
    }

    @keyframes main {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .head h1 {
        color: #eee;
    }

    .head h1 span {
        color: #ff2d20;
    }

    .list {

        margin-top: 50px;
    }

    .list ul {
        list-style: none;
    }

    .list li {
        border: 4px solid #373737;
        font-size: 1.5rem;
        padding: 20px;
        color: #eee;
        margin: 20px 0;
    }

    .list li:hover {
        background-color: #2F2F2F;
        border: 4px solid #B01107;
    }

</style>



<p class="welcome">WELCOME TO MY HISTORY</p>



<div class="container">
    <div class="main">
        <div class="head">
            <h1>Apa saja yang sudah saya pelajari di <span>LARAVEL 8</span> ini</h1>
        </div>

        <div class="list">
            <ul>
                <li>1. Installing Composser</li>
                <li>2. Installing Laravel Lewat Composser </li>
                <li>3. Melakukan Href</li>
                <li>4. Blade Tempating (partials komponen)</li>

            </ul>
        </div>
    </div>
</div>


@endsection