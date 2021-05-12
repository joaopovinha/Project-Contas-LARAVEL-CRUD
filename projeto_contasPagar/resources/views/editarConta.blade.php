<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editar Conta</title>
</head>
<body>
<div class="container">
        @include ('menu')

        @if (Session::has('mensagem'))
            <div class="alert alert-primary">{{Session::get('mensagem')}}</div>
        @endif
           
           <h3>Editar conta</h3>
        @foreach ($contas as $conta)
        <form action="/alterar" method="post">
            @csrf
            <label>Nome</label><br>
            <input class="form-control" type="text" name="txtNome" value="{{$conta->nome}}"><br>
            <label>Valor da conta</label><br>
            <input class="form-control" type="number" step="0.01" name="numbValor" value="{{$conta->valor}}"><br>
            <label>Data de Vencimento</label><br>
            <input class="form-control" type="date" name="dateVenc" value="{{$conta->data_venc}}"><br>
            <input class="btn btn-success" type="submit" value="SALVAR" name="btnSalvar">
        </form>
        @endforeach
    </div>
</body>
</html>