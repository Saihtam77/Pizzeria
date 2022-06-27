@auth
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        
            {{-- responsive option Collapse --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-md-flex" id="navbarNavAltMarkup">

                <div class="navbar-nav col-6">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"
                            class="nav-link">
                            Log out
                        </a>
                    </form>
                </div>

                <div class="navbar-nav">
                    <a href="{{ route('accueil') }}" class="nav-link">HOME</a>
                </div>

            </div>
        </div>
    </nav>
@endauth