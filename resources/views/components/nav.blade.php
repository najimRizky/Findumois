    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="/" style="font-family: 'brush script MT', cursive; font-size: 30px;">findumoiz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-4" >
                    <a class="nav-link {{request()->is('/') ? 'active' : '' }}" href="/">Home </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{request()->is('menu') ? 'active' : '' }}" href="/menu">Menu</a>
                </li>
                <li class="nav-item mx-4" >
                    <a class="nav-link {{request()->is('login') ? 'active' : '' }}" href="/login">Log In</a>
                </li>
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
            </ul>
            <button class="btn btn-danger my-2 my-sm-0 " type="button"><i class="fa fa-user"></i> Log In</button>
        </div>
    </nav>