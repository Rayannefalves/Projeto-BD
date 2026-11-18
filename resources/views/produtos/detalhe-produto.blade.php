@include('templates.header')   
@include('templates.Navbar')   

    <h1>Detalhe do Produto</h1>

    <h1>{{ $produto->nome }}</h1>
    <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    <p>Descrição: {{ $produto->descricao }}</p>

    <a href="/produtos">Voltar para a lista</a>

@include('templates.footer')   