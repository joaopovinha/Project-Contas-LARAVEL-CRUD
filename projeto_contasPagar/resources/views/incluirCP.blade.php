<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Incluir Conta</title>
</head>
<body>
<div class="container">
        @include ('menu')

        @if (Session::has('mensagem'))
            <div class="alert alert-primary">{{Session::get('mensagem')}}</div>
        @endif
           
           <h3>Incluir Conta a Pagar</h3>
        <form action="/incluir" method="post">
            @csrf
            <label>Nome</label><br>
            <input class="form-control" type="text" name="txtNome"><br>
            <label>Valor da conta</label><br>
            <input class="form-control" type="number" step="0.01" name="numbValor"><br>
            <label>Data de Vencimento</label><br>
            <input class="form-control" type="date" name="dateVenc"><br>
            <input class="btn btn-success" type="submit" value="SALVAR" name="btnSalvar">
        </form>
    </div>
</body>
</html>