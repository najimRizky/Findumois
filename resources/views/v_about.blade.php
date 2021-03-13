@extends('main.main')
@section('title', 'About Us')
@section('content')

<style>
.team {
  background: #E1D3D3;
  margin-bottom: 30px
}

.team .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
  text-align: center;
}

.team .member .pic {
  overflow: hidden;
  width: 150px;
  border-radius: 50%;
  margin: 0 auto 20px auto;
}

.team .member .pic img {
  transition: ease-in-out 0.3s;
}

.team .member:hover img {
  transform: scale(1.1);
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #36343a;
}

.team .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .member span::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #b5b3ba;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.team .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #a8a5ae;
}

.team .member .social a i {
  color: #fff;
  font-size: 16px;
  margin: 0 2px;
}

.team .member .social a:hover {
  background: #009970;
}

.team .member .social a + a {
  margin-left: 8px;
}
</style>

<section id="team" class="team">
    <div class="container">

      <div class="row col-lg-12">
        <div class="col-lg-12">
          <div class="section-title" data-aos="fade-right">
            <h2>Team findumois</h2>
            <p>Terdiri dari 4 programmer bijaksana nan tampan.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row">

            <div class="col-lg-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{asset('Gambar')}}/coba.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Najim Rizky</h4>
                  <span>Programmer 1</span>
                  <p>00000040113</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook-f"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""> <i class="fa fa-google"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{asset('Gambar')}}/bona.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Bonaventura Sanjaya</h4>
                  <span>Programmer 2</span>
                  <p>00000038083</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook-f"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""> <i class="fa fa-google"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="{{asset('Gambar')}}/filbert.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Filbert Khouwira</h4>
                  <span>Programmer 3</span>
                  <p>00000039724</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook-f"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""> <i class="fa fa-google"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="{{asset('Gambar')}}/coba.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Mohamad Farhan</h4>
                  <span>Programmer 4</span>
                  <p>00000037928</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook-f"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""> <i class="fa fa-google"></i> </a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
@endsection