
<nav class="navbar navbar-expand-md bg-light py-3 px-5">
    <div class="container-fluid">
        <div class="logo">
            <a class="navbar-brand" href="/">
                <img src="{{url('/img/logo_bi.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/.#team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/.#services">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/.#client">Our Client</a>
                </li>
            </ul>
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-light me-2">Logout</button>
            </form>
            @else
            <a href="/login"><button type="button" class="btn btn-primary me-3">Login</button></a>
            <a href="/register"><button type="button" class="btn btn-light">Register</button></a>
            @endauth
        </div>
    </div>
</nav>
