<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Ordem de Serviço</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    label {
      font-family: 'Roboto', sans-serif;
      color: #d70900;
    }

    h2 {
      color: #d70900;
      font-family: 'Roboto', sans-serif;
    }

    button {
      font-family: 'Roboto', sans-serif;
      font-weight: 400;
      color: #000;
      Width: 100px;
      Height: 30px;
      cursor: pointer;
      border-radius: 5px;
      background-color: #fff;
      border: solid 2px #000;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    input {
      border: solid 1px #d70900;
      border-radius: 5px;
    }

    input::placeholder {
      font-family: 'Roboto', sans-serif;
      color: #222222;
    }
  </style>
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