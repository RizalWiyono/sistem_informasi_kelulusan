@extends('template.layout')

@section('title')
    Home Page
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-3" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-light font-weight-bold active" href="/main">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link text-light" href="/payment">Cek Pembayaran</a>
            <a class="nav-link text-light" href="/bio">Biodata</a>
            <a class="nav-link text-light" href="/rules">Tata Tertib</a>
            <a class="nav-link text-light" href="/information">Informasi Kelulusan</a>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class=" slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/Bg-1.png" alt="" style="height: 300px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5">
        <h1 class="display-4 font-weight-bold">WEB INFORMASI MAHASISWA</h1>
        <p>Web ini berfungsi untuk membantu para mahasiswa baru untuk mendaftar, melihat pembayaran, mendownload slip pembayaran, memilih jenis ujian, mencetak kartu peserta, bidata, dan masih banyak lagi.</p>
    </div>


    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/Thumbnail-1.png" alt="" style="height: 300px; width: 100%; object-fit: cover; border-radius: 6px;">
            </div>
            <div class="col-md-4">
                <img src="/img/Thumbnail-2.png" alt="" style="height: 300px; width: 100%; object-fit: cover; border-radius: 6px;">
            </div>
            <div class="col-md-4">
                <img src="/img/Thumbnail-3.png" alt="" style="height: 300px; width: 100%; object-fit: cover; border-radius: 6px;">
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-2 bg-primary text-center" style="border-top-left-radius: 6px; border-top-right-radius: 6px;">
        <div class="container">
            <span class="text-light font-weight-bold">Web Informasi Mahasiswa</span>
        </div>
    </footer>
@endsection
