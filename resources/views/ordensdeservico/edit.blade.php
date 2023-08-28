<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
  <title>Editar Ordem de Serviço</title>
</head>

<body>
  <h2>Editar Ordem de Serviço</h2>
  <form action="/service/update/{{ $service->id }}" method='post'>
    @csrf
    @method('PUT')
    <div><label for="nome_tecnico">Técnico</label>
      <input type="text" name="nome_tecnico" value="{{$service->nome_tecnico}}">
    </div>

    <div><label for="data_solicitacao">Data da Solicitação</label>
      <input type="date" name="data_solicitacao" value="{{$service->data_solicitacao}}">
    </div>

    <div><label for="prazo_atendimento">Prazo</label>
      <input type="date" name="prazo_atendimento" value="{{$service->prazo_atendimento}}">
    </div>

    <div><label for="endereco_atendimento">Endereço</label>
      <input type="text" name="endereco_atendimento" value="{{$service->endereco_atendimento}}">
    </div>

    <div><label for="status">Status</label>
      <input type="text" name="status" value="{{$service->status}}">
    </div>

    <button type="submit">Salvar</button>
    <a href="/service/show">
      <button type="submit">Voltar</button>
    </a>
  </form>
</body>

</html>