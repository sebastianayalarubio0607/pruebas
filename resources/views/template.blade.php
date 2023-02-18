<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rick and Morty</title>
    <link rel="shortcut icon" href="https://play-lh.googleusercontent.com/fXQVXTma1ENwAFjsxJ4IT6GntBr3RxWP3HMSLbNdvycl-0tscOQEeJIEAmehcNOt5hCp=w240-h480-rw" />

    <!--cdn boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!--cdn boostrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/">listado personajes desde API</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listadopersonajes') }}">personajes desde BD</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
</body>

</html>
