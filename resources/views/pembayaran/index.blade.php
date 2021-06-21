@extends('template.layout')

@section('title')
    Cek Pembayaran
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-3" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-light" href="/main">Home</span></a>
            <a class="nav-link text-light font-weight-bold active" href="/payment">Cek Pembayaran</a>
            <a class="nav-link text-light" href="/bio">Biodata</a>
            <a class="nav-link text-light" href="/rules">Tata Tertib</a>
            <a class="nav-link text-light" href="/information">Informasi Kelulusan</a>
            </div>
        </div>
    </nav>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-3 mt-2">
        <h1 class="display-4 font-weight-bold">PEMBAYARAN</h1>
        <div class="bg-dark text-left text-light p-3 rounded-sm mt-5">
            <h5 class="font-weight-bold">Bagian Keuangan : +6289666509666 </h5>

            <h5 class="mt-4">
                Memo : Pembayaran Administrasi dapat dilalkukan dengan langsung datang ke Kampus atau melakukan via transfer.</br>
                Pembayaran Transfer melalui :</br>
                Bank Mandiri a/n.</br>
                Muhammad Riefki Ariyanto , No. Rek 102-201-02-1</br>
            </h5>
        </div>
    </div>


    <div class="col-md-12 mb-5">
        <div class="col-md-12 border border-dark" style="border-radius: 6px;">
            <table class="table mb-3" id="data_payment">
                <thead>
                    <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Konsumsi</td>
                        <td>Rp. 30.000</td>
                    </tr>
                    <tr>
                        <td>Psikologi</td>
                        <td>Rp. 150.000</td>
                    </tr>
                    <tr>
                        <td>Akademik</td>
                        <td>Rp. 200.000</td>
                    </tr>
                    <tr>
                        <td colspan="2">Pembayaran Transfer melalui :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Bank Mandiri a/n.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border-bottom:1px solid #FFF !important;">Muhammad Riefki Ariyanto , No. Rek 102-201-02-1</td>
                        <td></td>
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
