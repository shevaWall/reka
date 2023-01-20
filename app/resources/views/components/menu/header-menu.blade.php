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
            </ul>
            @auth
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
