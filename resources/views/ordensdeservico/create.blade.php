<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastrar Nova Ordem de Serviço</title>
  <style>
    .container {
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
      text-align: center;
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

    .back-button {
      margin-top: 10px;
      display: flex;
      justify-content: center;
    }
  </style>
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