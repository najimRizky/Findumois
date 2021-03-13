<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('script')
    @yield('style')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">

</head>
<body style="background-color: #E1D3D3">
    <header>
        @include('components.nav')
    </header>
    <main>
        <script>
            AOS.init({duration: 1000, once: true});
        </script>
        @yield('content')
    </main>
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
</body>

</html>