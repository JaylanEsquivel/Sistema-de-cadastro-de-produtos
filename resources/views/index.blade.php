<html>
    <head>
        <title>PRODUTOS CADASTRADOS</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{csrf_token()}}"/>
    </head>
    <body style="background-image: url('images.jpg'); background-repeat: no-repeat; background-size: 100%; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;">
        <div class="container-fluid">
          <div class="row" style="margin-top: 120px;">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12 bg-danger" style="border-radius: 10px; box-shadow: 10px 10px 5px #000;">
                <h3 class="text-center" style="color: #fff; margin-top: 20px;">Produtos cadastrados na Loja</h3>
 <table class="table">
  <thead class="thead-inverse">
      <tr class="text-center">
      <th>Id</th>
      <th>Nome</th>
      <th>Valor</th>
      <th>Estoque</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody style="background-color: #fff">
    @foreach ($produtos as $pd)
    <tr>
      <th scope="row">{{$pd->idProduto}}</th>
      <td>{{$pd->nome}}</td>
      <td>{{$pd->valor}}</td>
      <td>{{$pd->quant}}</td>
      <td><a href="index/editarproduto/{{ $pd->idProduto }}" class="btn btn-info">Editar</a>&nbsp;&nbsp;<a href="index/deletaproduto/{{ $pd->idProduto }}" class="btn btn-danger">Excluir</a></td>
    </tr>
    @endforeach
  </tbody>
</table><a class="btn btn-success" href="index/template">CADASTRAR</a>
            <div class="row">
                <div class="col-md-12 text-right">
                    <span style="color: #fff">Jaylan Esquivel</span>
                </div>
            </div>
            </div>
        <div class="col-md-3"></div>
          </div>
        </div>
        </div>
    </body>
</html>

