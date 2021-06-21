@extends('template.layout')

@section('title')
    Home Page
@endsection

@section('content')
    <img class="bg-homepage" src="/img/Background-Homepage.svg" alt="">

    <div class="main-homepage" align="center">

        <h1>MOTORCYCLE REPAIR SERVICE</h1>
        <h2>Service Motor Terpercaya No 1 Di Indonesia</h2>

        <h3>Jam Buka Bengkel</h3>

        <div class="place-jadwal" align="center">
            <p>Senin-Kamis : 09.00-22.00 WIB</p>
            <p>Senin-Kamis : 09.00-22.00 WIB</p>
        </div>

        <h2>Jadwalkan motor Anda untuk diservis sekarang juga.</h2>

        <button>
            <a href="/login">Login</a>
        </button>
    </div>
@endsection
