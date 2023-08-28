<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Ordens de Serviço</title>
</head>

<body>
    <div>
        <img src="https://media.licdn.com/dms/image/C4D0BAQFYeDThWHn9Ag/company-logo_200_200/0/1670531798265?e=1701302400&v=beta&t=-NXlCLiEwaJBQZc_ukDkNwEfY4vJWBQgbmPOLl3XtVE">
    </div>
    <div>
        <h2>Ordens de Serviço</h2>
    </div>
    <div class="container">
        <a href="/service/create">
            <button>Cadastrar nova OS</button>
        </a>
        <a href="/service/show">
            <button>Mostrar todas OS's</button>
        </a>
        <a href="/service/dashboard">
            <button>Painel de Acompanhamento</button>
        </a>
    </div>
</body>

</html>