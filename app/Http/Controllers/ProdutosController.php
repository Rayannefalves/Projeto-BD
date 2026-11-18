<?php
namespace App\Http\Controllers;

use App\Models\Produtos; 
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function home() {
        $produtos = Produtos::take(4)->get(); 
        return view('welcome', compact('produtos'));
    }

    public function index() {
        $produtos = Produtos::all(); 
        return view('produtos.listar-produto', compact('produtos'));
    }

    public function details($id) 
    {
        $produto = Produtos::findOrFail($id); 
        return view('produtos.detalhe-produto', compact('produto'));
    }
}