<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento a crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body class="bg-gray-200">
    @guest
        
    
    <header class="p-2 bg-white shadow">
        <div class="container d-flex align-items-center">
            <div class="col">
                <p class="h2">DevStagram</p>
            </div>

            <nav class="navbar">

                <div class="col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login.index')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register.index')}}">Registrar</a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>


    </header>
    @endguest

    <main class="container mx-auto my-5">
        <h2 class="font-black text-center">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram todos los derechos reservados
        {{now()->year}}

    </footer>

</body>

</html>