<html>
    <head>
        <title>EDITAR PRODUTO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{csrf_token()}}"/>
    </head>
    <body style="background-image: url('../../images.jpg'); background-repeat: no-repeat; background-size: 100%; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;">
        <div class="container-fluid">
          <div class="row" style="margin-top: 120px;">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12 bg-danger" style="border-radius: 10px; box-shadow: 10px 10px 5px #000;">
              <h3 class="text-center" style="color: #fff; margin-top: 20px;">Cadastro de Produto na Loja</h3>
        <form action="/laravelATV/public/index/editarproduto/foo/bar/{{$produtos->idProduto}}" method="post" class="form-control">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <label><b>Nome:</b></label><br>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$produtos->nome}}" />
            <label class="k"><b>Estoque:</b></label><br>
            <input type="text" name="quant" id="quant" class="form-control" value="{{$produtos->quant}}" />
            <label><b>Valor:(R$)</b></label><br>
            <input type="text" name="valor" id="valor" class="form-control" value="{{$produtos->valor}}" /><br>
            <div class="text-right">
            <a class="btn btn-warning" href="../../index">VOLTAR</a>
            <input class="btn btn-success" type="submit" name="bt-enviar" value="SALVAR" />
            </div>
        </form>
              <div class="row">
                <div class="col-md-12 text-right">
                    <span style="color: #fff">Jaylan Esquivel</span>
                </div>
            </div>
           </div>
        <div class="col-md-3"></div>
        </div>
        </div>
    </body>
</html>
