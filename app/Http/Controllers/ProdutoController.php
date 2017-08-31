<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Produto;


class ProdutoController extends Controller {
    public function Exibir() {
        return view('template');
    }
    public function Exibirsegundo() {
        return view('segunda');
    }
    public function Exibirteceira($id) {
        return view('teceira',['id' => $id]);
    }
    public function Exibirteste() {
        return view('teste');
    }
    public function Exibirindex() {
        $Produto = Produto::all();
        return view('index', ['produtos' => $Produto]);
    }
    public function Exibireditar($id) {
        $Produto = Produto::find($id);
        return view('editarproduto', ['produtos' => $Produto]);
    }
    public function Updadeproduto($id) {
        $Produto = Produto::find($id);
        
        $input = \Request::all();
        $nome = $input['nome'];
        $quant = $input['quant'];
        $valor = $input['valor'];
        $Produto->nome = $nome;
        $Produto->quant = $quant;
        $Produto->valor = $valor;
        
        $Produto->save();
        
        return redirect('/index');
    }
    public function Deletaproduto($id) {
        $produto = Produto::find($id);
        
        $produto->delete();      
        return redirect('/index');
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
