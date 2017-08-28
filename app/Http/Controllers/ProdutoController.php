<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Produto;


class ProdutoController extends Controller {
    public function Exibir() {
        return view('template');
    }
    public function Exibirindex() {
        $Produto = Produto::all();
        return view('index', ['produtos' => $Produto]);
    }
    public function Exibireditar($id) {
        $Produto = Produto::find($id);
        return view('editarproduto', ['produtos' => $Produto]);
    }
    public function CadastrarProduto() {
     
        $input = \Request::all();
        $nome = $input['nome'];
        $quant = $input['quant'];
        $valor = $input['valor'];
        
        $novo = new Produto();
        
        $novo->nome = $nome;
        $novo->quant = $quant;
        $novo->valor = $valor;
        
        $novo->save();
        
            return redirect('/index');        
    }
}
