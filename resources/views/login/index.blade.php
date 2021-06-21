@extends('template.layout')

@section('title')
    Home Page
@endsection

@section('content')
<body class="body-homepage">
    <img class="bg-homepage" src="/img/Background-Homepage.svg" alt="">

    <div class="main-homepage main-login">
        <div class="place-form-login" align="left">
            <h1>Masuk</h1>

            <input type="text" placeholder="Email">
            <input type="text" placeholder="Password">

            <input class="btn-yellow" type="submit" value="MASUK">
        </div>

        <div class="title-form-login">
            <h1>S.MOT MOTORCYLE REPAIR</h1>
            <p>Service Motor Terpercaya No 1 Di Indonesia</p>
        </div>
    </div>
</body>
@endsection
