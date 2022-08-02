<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ env("APP_NAME") }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>

            <div class="user-details d-flex align-items-center">
                <div class="user-avatar">
                    <img src="{{ asset("assets/images/" . Auth::user()->avatar) }}" alt="">
                </div>
                <div class="username">
                    <span>{{ Auth::user()->name }}</span>
                </div>
            </div>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route("edit-profile")}}">Edit Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route("logout") }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
