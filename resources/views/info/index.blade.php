@extends('template.layout')

@section('title')
    Information
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-3" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-light" href="/main">Home</a>
            <a class="nav-link text-light" href="/payment">Cek Pembayaran</a>
            <a class="nav-link text-light" href="/bio">Biodata</a>
            <a class="nav-link text-light" href="/rules">Tata Tertib</a>
            <a class="nav-link text-light font-weight-bold active" href="/information">Informasi Kelulusan</a>
            </div>
        </div>
    </nav>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-3 mt-2">
        <h1 class="display-4 font-weight-bold">Informasi Kelulusan</h1>
        <div class="bg-dark text-left text-light p-3 rounded-sm mt-5">
            <h5 class="font-weight-bold">Daftar Kelulusan</h5>
        </div>
    </div>

    <div class="col-md-12 mb-5">
        <div class="col-md-12 border border-dark" style="border-radius: 6px;">
            <table class="table mb-3">
                <thead>
                    <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hendri Daffa A</td>
                        <td>Laki-Laki</td>
                        <td class="text-success">Lulus</td>
                    </tr>
                    <tr>
                        <td>Muhammad Farhan Aqil </td>
                        <td>Laki-Laki</td>
                        <td class="text-success">Lulus</td>
                    </tr>
                    <tr>
                        <td>Samsul Safalas </td>
                        <td>Laki-Laki</td>
                        <td class="text-danger">Tidak Lulus</td>
                    </tr>
                    <tr>
                        <td>Alif Tegor Surya Faridzki </td>
                        <td>Laki-Laki</td>
                        <td class="text-success">Lulus</td>
                    </tr>
                    <tr>
                        <td>Muhammad Riefki Ariyanto </td>
                        <td>Laki-Laki</td>
                        <td class="text-success">Lulus</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-5 py-2 bg-primary text-center" style="border-top-left-radius: 6px; border-top-right-radius: 6px;">
        <div class="container">
            <span class="text-light font-weight-bold">Web Informasi Mahasiswa</span>
        </div>
    </footer>
@endsection
