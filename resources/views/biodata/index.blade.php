@extends('template.layout')

@section('title')
    Biodata
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-3" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-light" href="/main">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link text-light" href="/payment">Cek Pembayaran</a>
            <a class="nav-link text-light font-weight-bold active" href="/bio">Biodata</a>
            <a class="nav-link text-light" href="/rules">Tata Tertib</a>
            <a class="nav-link text-light" href="/information">Informasi Kelulusan</a>
            </div>
        </div>
    </nav>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-3 mt-2">
        <h1 class="display-4 font-weight-bold">DATA</h1>
        <div class="bg-dark text-left text-light p-3 rounded-sm mt-5">
            <h5 class="font-weight-bold">Input Data Anda dengan Benar!</h5>
        </div>
    </div>

    <form action="input_bio" method="POST">
        @csrf
        <div class="col-md-12 mb-5">
            <div class="col-md-12 border border-dark" style="border-radius: 6px;">
                <table class="table mb-3">
                    <thead>
                        <tr>
                        <th colspan="2">Biodata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nama :</th>
                            <td><input type="text" name="name" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="email" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin :</th>
                            <td>
                                <input type="radio" name="gender" value="Laki-Laki"><label for="">Laki-Laki</label></br>
                                <input type="radio" name="gender" value="Perempuan"><label for="">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <th>Agama :</th>
                            <td><input type="text" name="religius" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir :</th>
                            <td><input type="date" name="birth_date" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir :</th>
                            <td><input type="text" name="birth_place" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Nomer Handphone :</th>
                            <td><input type="text" name="no_telp" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Status :</th>
                            <td><input type="text" name="status" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Sekolah Terakhir :</th>
                            <td><input type="text" name="school" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th>Foto :</th>
                            <td><input type="file" name="img" class="form-control p-0" style="height: auto;" required></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <div class="col-md-12 border border-dark" style="border-radius: 6px;">
                <table class="table mb-3">
                    <thead>
                        <tr>
                        <th colspan="2">Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Jenis Ujian :</th>
                            <td>
                                <input type="radio" name="test" value="CBT"><label for="">CBT</label></br>
                                <input type="radio" name="test" value="PBT"><label for="">PBT</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <div class="col-md-12 mb-5">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
    </form>

    <footer class="footer mt-5 py-2 bg-primary text-center" style="border-top-left-radius: 6px; border-top-right-radius: 6px;">
        <div class="container">
            <span class="text-light font-weight-bold">Web Informasi Mahasiswa</span>
        </div>
    </footer>
@endsection
