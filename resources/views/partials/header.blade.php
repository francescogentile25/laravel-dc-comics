<header>
    <ul class="d-flex  nav-link gap-3 justify-content-center fs-4">
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('comics.index') }}">Comics</a>
        </li>
        <li>
            <a href="{{ route('comics.create') }}">Contattaci</a>
        </li>
    </ul>
</header>
<style>
    a,
    li,
    ul {
        list-style: none;
        text-decoration: none;
        color: currentColor;

    }

    .nav-link {
        text-align: center
    }
</style>
