<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/show.css') }}" rel="stylesheet">
  <title>Ordens de Serviço</title>
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
      <th>Data da Solicitação</th>
      <th>Prazo</th>
      <th>Endereço</th>
      <th>Status</th>
    </tr>
    @foreach($services as $service)
    <tr>
      <td width="240" height="40">{{$service->nome_tecnico}}</td>
      <td width="300" height="40">{{ \Illuminate\Support\Carbon::parse($service->data_solicitacao)->format('d/m/Y') }}</td>
      <td width="140" height="40">{{ \Illuminate\Support\Carbon::parse($service->prazo_atendimento)->format('d/m/Y') }}</td>
      <td width="200" height="40">{{$service->endereco_atendimento}}</td>
      <td width="140" height="40">{{$service->status}}</td>
      <td width="100" height="40"><a href="/service/edit/{{ $service->id }}"><button>Editar</button></a></td>
      <td width="100" height="40"><a href="/service/delete/{{ $service->id }}"><button>Excluir</button></a></td>
    </tr>
    @endforeach
</body>

</html>