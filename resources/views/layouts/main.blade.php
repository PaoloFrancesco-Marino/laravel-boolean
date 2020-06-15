<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
</head>
<body>

    {{-- header --}}
    <header class="main-header">
        {{-- navbar --}}
        <nav class="navbar">
            <a href="#" class="navbar-brand">Boolean</a>

            <ul>
            <li><a href="{{ route('static-page.home') }}">Home</a></li>
                <li><a href="#">Corso</a></li>
            <li><a href="{{ route('student.index') }}">Dopo il Corso</a></li>
                <li><a href="#">Lezione gratuita</a></li>
                <li><a href="#">Candidatura</a></li>
            </ul>
        </nav> 
    </header>

    {{-- Main Content --}}
    <main class="main-content">
        @yield('main-content')
    </main>

    {{-- footer --}}
    <footer class="main-footer">
        <nav class="nav-footer">
            <div class="footer-brand">Boolean</div>

            <ul>
                <li><a href="{{ route('static-page.home') }}">Home</a></li>
                <li><a href="{{ route('static-page.faq') }}">Domande frequenti</a></li>
                <li><a href="{{ route('static-page.privacy') }}">Privacy</a></li>

            </ul>
        </nav>
    </footer>
    
</body>
</html>