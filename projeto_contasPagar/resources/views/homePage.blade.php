<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lista de Contas</title>
</head>
<body>
    <div class="container">

      

        <table class="table">
            <thead class="thead-dark">
                <th>Nome</th>
                <th>Valor</th>
                <th>Data de Vencimento</th>
                <th>Editar</th>
                <th>Excluir</th>

            </thead>
            <tbody>
            @include ('menu')
            
                @foreach($contas as $conta)
                    <tr>
                        <td>{{$conta->nome}}</td>
                        <td>{{$conta->valor}}</td>
                        <td>{{$conta->data_venc}}</td>
                        <td><a class="btn btn-warning" href="/editar-conta/{{$conta->id}}">Editar</a></td>
                        <td><a class="btn btn-danger" href="/deletar/{{$conta->id}}">Excluir</a></td>
                
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
