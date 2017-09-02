<?php

Route::get('senha', function(){
    echo bcrypt('1234567'); 
});

Route::get('/', function () {
    return 'Hello World jay';  /*view('welcome');*/
});
Route::get('/index', 'ProdutoController@Exibirindex');
Route::get('/index/template', 'ProdutoController@Exibir');
Route::get('/index/editarproduto/{id?}', 'ProdutoController@Exibireditar');

Route::get('/index/deletaproduto/{id?}', 'ProdutoController@Deletaproduto');

Route::post('/index/template/foo/bar', 'ProdutoController@CadastrarProduto');
Route::post('/index/editarproduto/foo/bar/{id}', 'ProdutoController@Updadeproduto');

Route::get('teste', 'ProdutoController@Exibirteste');
Route::get('segunda', 'ProdutoController@Exibirsegundo');
Route::get('teceira/{id}', 'ProdutoController@Exibirteceira');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
