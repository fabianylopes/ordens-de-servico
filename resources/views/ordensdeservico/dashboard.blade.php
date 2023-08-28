<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <title>Ordens de Serviço</title>
  <style>
  </style>
</head>

<body>
  <div class="header">
    <h2>Painel de Acompanhamento</h2>
    <a href="/">
      <button type="submit">Home</button>
    </a>
  </div>
  <table border="2px">
    <tr>
      <th>Nome do Técnico</th>
      <th>Tempo de Abertura</th>
      <th>Status</th>
    </tr>
    @foreach($services as $service)
    <tr>
      <td width="100" height="40">{{$service->nome_tecnico}}</td>
      <td width="100" height="40">{{$service->timePassed}}</td>
      <td width="100" height="40">{{$service->status}}</td>
    </tr>
    @endforeach
</body>

</html>