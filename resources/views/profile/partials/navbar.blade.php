<nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <span class="pf-brand fs-4">PartyFinder</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pfNav"
                aria-controls="pfNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="pfNav" class="collapse navbar-collapse">
            <form class="d-flex ms-lg-4 my-3 my-lg-0 flex-grow-1" role="search">
                <div class="input-group pf-glass-2 overflow-hidden">
                    <span class="input-group-text bg-transparent border-0 text-white-50">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="form-control border-0 bg-transparent text-white pf-input"
                           type="search"
                           placeholder="Search parties, concerts, festivals..."
                           aria-label="Search">
                </div>
            </form>

            <ul class="navbar-nav ms-lg-3 align-items-lg-center gap-2">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-outline-light rounded-pill px-3" href="{{ route('login') }}">
                                Log in
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn pf-btn-gradient rounded-pill px-3" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="pf-chip">
                                <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li>
                                <a class="dropdown-item" href="{{ route('parties.index') }}">
                                    <i class="bi bi-grid me-2"></i>Browse Parties
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>

                            {{-- Breeze logout --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>