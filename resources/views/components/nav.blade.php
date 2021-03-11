    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="/" style="font-family: 'brush script MT', cursive; font-size: 36px;">findumoiz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-4" >
                    <a class="nav-link {{request()->is('/') ? 'active text-danger' : '' }} underlineHover" href="/">Home </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{request()->is('menu') ? 'active text-danger' : '' }} underlineHover" href="/menu">Menu</a>
                </li>
                <li class="nav-item mx-4" >
                    <a class="nav-link {{request()->is('aboutus') ? 'active text-danger' : '' }} underlineHover" href="/aboutus">About Us</a>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            {{-- </ul>
            <a class="btn btn-danger my-2 my-sm-0 " href="/login" type="button"><i class="fa fa-user"></i> Log In</a>
        </div>
    </nav> --}}

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-light p-4">
                <a class="nav-link {{request()->is('/') ? 'active text-danger' : '' }} underlineHover" href="/">Home </a>
                <a class="nav-link {{request()->is('menu') ? 'active text-danger' : '' }} underlineHover" href="/menu">Menu</a>
                <a class="nav-link {{request()->is('aboutus') ? 'active text-danger' : '' }} underlineHover" href="/aboutus">About Us</a>
            
          </div>
        </div>
        <nav class="navbar navbar-light bg-transparent">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <ul class="nav justify-content-center">
                    <img class="nav-link active" href="#" style="width: 200px" src="{{asset('Gambar')}}/Logo_Findumois.png">
            </ul>
            <ul class="nav justify-content-right">
                <li class="nav-item">
                    @guest
                        <a class="nav-link" style="color: black" href="{{ route('login') }}">{{ __('Login') }}</a>

                        {{-- <a class="nav-link active" style="text-decoration: none" type="link" href="/login">Login</a> --}}
                    @else
                    <a class="nav-link" style="color: black" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                    @endguest
                </li>
            </ul>
        </nav>
    </div>