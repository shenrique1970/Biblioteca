<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Autor</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
    </head>
<body>
    <div class="container">
            <nav class="navbar navbar-default navbar-static-top" style="background-color: #e3f2fd;">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/autores">
                            Biblioteca laravel
                        </a>
                    </div>
                    <ul class="navbar navbar-nav navbar-right">
                        <li><a href="/autores">Listagem</a></li>
                        <li><a href="/autores/novo">novo</a></li>
                    </ul>
                </div>
            </nav>
            @yield('content')
     </div>     
    <footer>
    <div class="container">
        <div class="footer-copyright" style="background-color: #e3f2fd;">
        
            © {{date('Y')}} Copyright - SHVR Volta Redonda - Todos os diteiros reservados
        </div>
    </div>   
    </footer>
</body>
</html>