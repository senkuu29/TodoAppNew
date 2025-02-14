<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand fw-bolder d-flex align-items-center" href="{{ route('home') }}" >
            <img src="{{asset('bg/7611770.png')}}" alt="" width="40" height="40" class="me-2">
        </a>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- form search --}}
        <form class="d-flex" action="{{ route('home') }}" method="GET">
            <input class="form-control me-2" type="text" name="query" placeholder="Cari tugas..." value="{{ request()->query('query') }}">
            <button class="btn btn-light text-primary" type="submit"><i class="bi bi-search"></i></button>
        </form>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="https://github.com/senkuu29"><i class="bi bi-github me-1"></i></i>senkuu29</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/dden.aj/"><i class="bi bi-instagram me-1"></i>dden.aj</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.tiktok.com/@senkuu291?is_from_webapp=1&sender_device=pc"><i class="bi bi-tiktok me-1"></i>senkuu291</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-circle me-1"></i>Profile</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light text-primary ms-lg-3 px-3" href="#"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
