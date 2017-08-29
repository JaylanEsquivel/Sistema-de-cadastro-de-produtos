<?php

Route::get('/', function () {
    return 'Hello World jay';  /*view('welcome');*/
});
Route::get('/index', 'ProdutoController@Exibirindex');
Route::get('/index/template', 'ProdutoController@Exibir');
Route::get('/index/editarproduto/{id?}', 'ProdutoController@Exibireditar');
Route::post('/index/template/foo/bar', 'ProdutoController@CadastrarProduto');
Route::post('/index/editarproduto/foo/bar/{id}', 'ProdutoController@Updadeproduto');

