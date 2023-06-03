<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>5Labs | e-commerce</title>

        <link rel="icon" href="images/icon.jpg" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link rel="stylesheet" href="styles/layout.css">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-logo"><img class="nav-image" src="{{ asset('images/logo.png') }}" onmouseover="hover(this);" onmouseout="hover_off(this)" alt="Logo 5Labs"></div>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login</a></li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
            <li class="nav-item"><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
            </ul>
        </nav>
        
        @yield('content')
        <footer>
            <p>&copy; 2023 - Developed by <a href="https://br.linkedin.com/in/larissa-rezende-fazza-8a9b28204"> Larissa Fazza</a></p>
        </footer>
    </body>
</html>

<script>
    function hover(img)
    {
        img.src = "{{ asset('images/logo2.png') }}"
    }
    function hover_off(img)
    {
        img.src = "{{ asset('images/logo.png') }}"
    }
</script>
