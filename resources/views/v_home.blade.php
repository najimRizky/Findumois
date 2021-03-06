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

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" style="height: auto !important">
                <div class="carousel-item active">
                    <img class="d-block " style="position: center; width: 100%" src="{{asset('Gambar')}}/Carousel1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block " style="position: center; width: 100%" src="{{asset('Gambar')}}/Carousel2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block " style="position: center; width: 100%" src="{{asset('Gambar')}}/Carousel3.png" alt="Third slide">
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
        <div class="jumbotron" style="background-color: #E1D3D3" data-aos="zoom-in">
            <div class="container d-flex justify-content-center">
                <div class="row justfy-content-center">
                    <h1 class="display-5">SANS <br> DANGER <br> POUR LE <br> PORTEFEUILLE</h1><br/>
                    <p class="lead">Restoran pertama dengan nuansa Perancis <br> yang menyediakan berbagai menu <br>berkelas namun tetap<br> aman untuk dompet</p>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: #C98787">
            <div class="jumbotron" style="background-color: #C98787">
                <div class="container">
                    <a class="display-4">New</a>
                    <a class="display-4" style="font-size: 20px">Menu</a>
                    <h2 class="display-4" style="font-size: 20px; color: #C98787">asdasd</h2>
                    <div style="display: flex" class="d-flex justify-content-center">
                        <div class="row justify-content-center">
                            <div class="card mt-2 mx-2" style="width: 18rem; " data-aos="zoom-in">
                                <img class="card-img-top" src="{{asset('Gambar')}}/miegoreng.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Mie Goreng</h5>
                                    <p class="card-text">dari mie yang dibeli dari minimarket terdekat.</p>
                                    <a href="/menu" class="btn btn-primary">Go Menu</a>
                                </div>
                            </div>
                            <div class="card mt-2 mx-2" style="width: 18rem;" data-aos="zoom-in">
                                <img class="card-img-top" src="{{asset('Gambar')}}/nasigoreng.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng</h5>
                                    <p class="card-text">nasi yang digoreng dengan minyak yang sedikit agar rendah kalori dan sehat untuk lambung sobat misqueen.</p>
                                    <a href="/menu" class="btn btn-primary">Go Menu</a>
                                </div>
                            </div>
                            <div class="card mt-2 mx-2" style="width: 18rem;" data-aos="zoom-in">
                                <img class="card-img-top" src="{{asset('Gambar')}}/potato-chips-cure-cramps.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Kripik Kentang</h5>
                                    <p class="card-text">kentang yang ditanam sendiri dan digoreng dengan suhu yang stabil hingga garing.</p>
                                    <a href="/menu" class="btn btn-primary">Go Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="background-color: #E1D3D3">
            <div class="container" style="text-align: center">
                <img src="{{asset('Gambar')}}/dompet.png" style="height: 100px; width: 100px; text-align: center">
                <h1 class="lead">Kami Pastikan</h1>
                <h2 class="lead" style="color: red">Perut anda akan tetap kenyang walaupun akhir bulan</h2>
                <p class="lead" style="font-size: 15px">Jika anda merasa uang anda kurang atau merasa makanan <br> kami masih terasa mahal, berarti anda tidak tahu diri. ehe <br> bercanda tau diri</p>
            </div>
        </div>

    {{-- <div class="container">
        <h1>Selamat Datang di Findumois</h1>
    </div> --}}
@endsection