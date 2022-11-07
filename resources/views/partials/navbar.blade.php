<header>
    <nav class="navbar navbar-expand-md bg-light py-3 px-5">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img src="{{url('/img/logo_bi.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#client">Our Client</a>
                    </li>
                </ul>
                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light me-2">Logout</button>
                </form>
                @else
                <a href="#"><button type="button" class="btn btn-primary me-3">Login</button></a>
                <a href="#"><button type="button" class="btn btn-light">Register</button></a>
                @endauth
            </div>
        </div>
    </nav>
</header>
