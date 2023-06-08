<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalandia</title>
    <!--Import CSS Bosstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://app.embed.im/snow.js"></script>
    <style>
        /*Import Font*/
        @import url('https://fonts.googleapis.com/css2?family=Dosis&display=swap');
        body{
            font-family: 'Dosis', sans-serif;
        
        }
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-nav h4" class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand h2">Animalandia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" >Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id='app'>
        @yield('content')
    </div>
    <!--Import JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</body>
</html>