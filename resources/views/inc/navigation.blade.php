


@auth
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="{{route("accueil")}}">Home</a>
        <a class="nav-link" href="{{route("dashboard")}} ">Dashboard</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="nav-link">
                Log out
            </a>
        </form>
    </nav>
@endauth

@guest
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="{{route("accueil")}}">Home</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        
    </nav>
@endguest