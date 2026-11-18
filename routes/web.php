<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/',[ProdutosController::class, 'index'])->name('index');

Route::get('/cadastrar', function () {
    return view('produtos.cadastrar-produto');
});

Route::get('/detalhe', function () {
    return view('produtos.detalhe-produto');
});

Route::get('/produtos', function () {
    return view('produtos.listar-produto');
})->name('produtos.listar');

