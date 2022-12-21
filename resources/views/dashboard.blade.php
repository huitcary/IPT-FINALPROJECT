@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div  class="container m-8" style="margin-top:60px;">
        <div id="makeup" class="card col-sm-8 offset-sm-3 border border-dark mt-6 p-5">
            <div class="card-header">
                <h1 class="text-center">MAKEUP</h1>

                <p>As a make-up artist, your work will involve creating images and characters through the medium of make-up,</p>
                <p> hairstyles and prosthetics according to a brief. You'll interpret the make-up requirements of clients to</p>
                <p> produce both a creative and technically accurate visual representation.</p>
            </div>
        </div>
    </div>

@endsection

<style>

    #makeup{
        background-color: #000000d2;
        border-radius: 10px;
        color: white;
    }
    img {
        width: 85%;
    }

    body{
        background-image: url(images/back.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100%;
    }
</style>