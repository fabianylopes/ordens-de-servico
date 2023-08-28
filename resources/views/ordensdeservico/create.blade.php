<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
  <title>Cadastrar Nova Ordem de Serviço</title>

</head>

<body>
  <div class="container">
    <h2>Cadastrar nova OS</h2>
    <form action="/service/create" method="POST">
      @csrf
      <div>
        <label for="">Nome:</label>
        <input type="text" name="nome_tecnico" placeholder="Nome do Técnico" required>
      </div>
      <div>
        <label>Data:</label>
        <input type="date" name="data_solicitacao" placeholder="Data da Solicitação" required>
      </div>
      <div>
        <label>Prazo:</label>
        <input type="date" name="prazo_atendimento" placeholder="Prazo" required>
      </div>
      <div>
        <label>Endereço:</label>
        <input type="text" name="endereco_atendimento" placeholder="Endereço" required>
      </div>
      <div>
        <label>Status:</label>
        <input type="text" name="status" placeholder="Status" required>
      </div>
      <div class="back-button">
        <button type="submit">Criar OS</button>
      </div>
    </form>
  </div>
  <div class="back-button">
    <a href="/">
      <button>Voltar</button>
    </a>
  </div>
</body>

</html>