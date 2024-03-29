<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" aria-current="page" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link @if (Route::is('movies')) active @endif"
                    href="{{ route('movies') }}">Movies</a>
                <a class="nav-link @if (Route::is('about')) active @endif"
                    href="{{ route('about') }}">About</a>
                <a class="nav-link @if (Route::is('contacts')) active @endif"
                    href="{{ route('contacts') }}">Contacts</a>
            </div>
        </div>
    </div>
</nav>
