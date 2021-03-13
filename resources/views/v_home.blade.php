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
            <div class="carousel-inner" style="height: 500px !important">
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
        <div class="jumbotron" style="background-color: #E1D3D3">
            <div class="container d-flex justify-content-center">
                <h1 class="display-4">SANS <br> DANGER <br> POUR LE <br> PORTEFEUILLE</h1><br/>
                <p class="lead">Restoran pertama dengan nuansa Perancis <br> yang menyediakan berbagai menu <br>berkelas namun tetap<br> aman untuk dompet</p>
            </div>
        </div>
        <div class="container" style="background-color: #C98787">
            <div class="jumbotron" style="background-color: #C98787">
                <div class="container">
                    <a class="display-4">New</a>
                    <a class="display-4" style="font-size: 20px">Menu</a>
                    <h2 class="display-4" style="font-size: 20px; color: #C98787">asdasd</h2>
                    <div style="display: flex" class="d-flex justify-content-center">
                        <div class="card" style="width: 18rem; margin-right: 30px">
                            <img class="card-img-top" src="{{asset('Gambar')}}/Ayam Bakar.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; margin-right: 30px">
                            <img class="card-img-top" src="{{asset('Gambar')}}/Ayam Bakar.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('Gambar')}}/Ayam Bakar.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="background-color: #E1D3D3">
            <div class="container" style="text-align: center">
                <img src="{{asset('Gambar')}}/dompet.png" style="height: 100px; weight: 100px; text-align: center">
                <h1 class="lead">Kami Pastikan</h1>
                <h2 class="lead" style="color: red">Perut anda akan tetap kenyang walaupun akhir bulan</h2>
                <p class="lead" style="font-size: 15px">Jika anda merasa uang anda kurang atau merasa makanan <br> kami masih terasa mahal, berarti anda tidak tahu diri. ehe <br> bercanda tau diri</p>
            </div>
        </div>
        <footer class="text-center text-black" style="background-color: #C98787">
            <div class="container" style="padding-top: 30px">
                <div class="row">
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Project UTS</h5>
                    <p>
                      Website ini bertujuan untuk memenuhi tugas Ujian Tengah Semester
                      dari kelas Pemogroman Website IF-430-FL
                    </p>
                  </div>
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Proses</h5>
                    <p>
                      Website ini dikerjakan oleh 4 mahasiswa programmer dari jurusan
                      Informatika dalam kurung waktu pengerjaan kurang lebih 2 minggu
                    </p>
                  </div>
                </div>
              </div>
            <div class="container p-4 pb-0">
              <section class="mb-4">
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #3b5998;"
                  href="#!"
                  role="button"
                  ><i class="fa fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #55acee;"
                  href="#!"
                  role="button"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #dd4b39;"
                  href="#!"
                  role="button"
                  ><i class="fa fa-google"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #ac2bac;"
                  href="#!"
                  role="button"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #333333;"
                  href="#!"
                  role="button"
                  ><i class="fa fa-github"></i
                ></a>
              </section>
            </div>
            
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">findumois.com</a>
            </div>
          </footer>

    {{-- <div class="container">
        <h1>Selamat Datang di Findumois</h1>
    </div> --}}
@endsection