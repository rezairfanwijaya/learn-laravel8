@extends('layouts.main')
<style>
    body {
        background-color: #232222;

    }

    .main {
        margin-top: 90px;
    }

    h1.catatan {
        color: #eee;
        text-align: center;
        animation: catatan 3s;
        font-size: 2rem;
        letter-spacing: 2px;
    }

    h1.catatan span {
        background-color: #ff2d20;

    }

    @keyframes catatan {
        0% {
            opacity: .4;
            margin-top: -100px;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes list {
        0% {

            margin-top: -100px;
        }

        100% {
            opacity: 1;
        }
    }

    .list {
        border-radius: 20px;
        width: 100%;
        background-color: #2F2F2F;
        animation: list 2s;
        padding: 30px;
    }

    .list li {
        color: #eee;
        font-size: 1.2rem;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .list p.content-list {
        color: #eee;
        font-size: 1rem;
        letter-spacing: 1px;
        line-height: 35px;
    }

    .list span {
        color: #ff2d20;
    }

</style>



@section('konten')
    <div class="container main">
        <h1 class="catatan mb-3">Cat<span>atan</span></h1>
        <div class="list">
            <ol>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Syntax</li>
                    <p class="content-list">
                        <span>@ dd()</span> untuk vardumb dan die
                    </p>
                </div>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Folder</li>
                    <p class="content-list">Letak MCV (Model, View, Constroller) berada di folder terpisah.<br>
                        Model berada di folder <span>App->Models</span> <br>
                        View berada di folder <span>Resources->View</span><br>
                        Controller berada di folder <span>App->HTTP->Controllers</span>
                    </p>
                </div>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Href Page Lain</li>
                    <p class="content-list">
                        Untuk melakukan href sangat simple,cukup ketikan <span>href="/file-tujuan"</span><br>
                        Pastikan file tujuan (css,js,img,font dll) berada di folder <span>public</span>

                    </p>
                </div>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Syntax templating</li>
                    <p class="content-list">
                        <span>@ yield</span> --> wadah konten dari tiap halaman childs (nama yield harus sesuai dengan nama section) <br>
                        <span>@ section</span> --> untuk memasukan konten dari halamam child ke dalam tempalte (nama section harus sesuai dengan nama yield) <br>
                        <span>@ extends</span> --> untuk memasukan template ke halaman childs <br>
                        <span>@ include</span> --> untuk memasukan komponen (navbar, footer dll) <br>
                    </p>
                </div>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Mengganti Title tiap halaman</li>
                    <p class="content-list">
                        Caranya gampang tinggal memasukan array di routes dengan index title (bebas) dan value sesuai dengan halaman yang dimaksud. Panggil index di title pada template halaman
                    </p>
                </div>
                <div class="folder konten" style="margin-bottom: 50px;">
                    <li>Memilih item aktif pada navbar</li>
                    <p class="content-list">
                        bikin ternary pada tipa nav-item dan  disesuikan dengan judul yang kita inginkan
                        <img src="img/ternarynavitem.png" alt="ternary" style="width: 50rem">
                    </p>
                </div>
            </ol>
        </div>
    </div>
@endsection

