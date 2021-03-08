@extends('main.main')
@section('title','Home')
@section('script')
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection
@section('content')

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" style="height: 300px !important">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/500/200" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/500/300" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/500/400" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    {{-- <div class="container">
        <h1>Selamat Datang di Findumois</h1>
    </div> --}}
@endsection