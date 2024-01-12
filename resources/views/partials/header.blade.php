<header>
    LOGO
    <hr>

    <nav>
        {{-- cosi i link non vanno bene --}}
        {{-- <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/compact">Compact</a>
            </li>
        </ul> --}}
        

        {{-- con url nell'ispeziona ci scrive l'url della pagina a cui andremo cliccando il link --}}
        <ul>
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/about') }}">About</a>
            </li>
            <li>
                <a href="{{ url('/compact' )}}">Compact</a>
            </li>
        </ul>
    </nav>
</header>