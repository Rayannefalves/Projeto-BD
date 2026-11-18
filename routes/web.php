<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', [ProdutosController::class, 'home']);

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');

// Route::get('/cadastrar', function () {
//     return view('produtos.cadastrar-produto');
// });

// Route::get('/detalhe', function () {
//     return view('produtos.detalhe-produto');
// });

