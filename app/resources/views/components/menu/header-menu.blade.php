<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{asset('/images/logo.png')}}" alt="" width="150" height="24"
                 class="d-inline-block align-text-top"/>
            RekaRello
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class([
                        'nav-link',
                        'active' => request()->is('/'),
                        ])
                       aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a @class([
                            'nav-link',
                            'disabled' => !auth()->user(),
                            'active' => request()->is('dashboard'),
                        ])
                       href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            @auth
                <form class="d-flex my-2 my-md-0 me-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="btn-group ">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{route('logout')}}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                    </ul>
                </div>

            @else
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    @if(route('login'))
                        <a class="btn btn-primary" href="{{route('login')}}">Log in</a>
                    @endif
                    @if(route('register'))
                        <a class="btn btn-success" href="{{route('register')}}">Register</a>
                    @endif
                </div>
            @endauth
        </div>
    </div>
</nav>
