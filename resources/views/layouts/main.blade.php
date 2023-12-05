<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Views</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
</head>

<body>

    <div class = "row">
        <div class = "coll">
            <div class = "menu">
                <ul>
                    <li><a href="{{route('clientes.index')}}"></a>Clientes</li>
                    <li><a href=""></a>Produtwos</li>
                    <li><a href=""></a>Departments</li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('conteudo')
        </div>
    </div>
   
</body>
</html>