@include('templates.header')
@include('templates.Navbar')

<div class="container my-5">
    <h1 class="title">Detalhe do Produto</h1>
    <div class="row">
        <div class="col">
            <h3 class="text">{{ $produto->nome }}</h3>
            <div class="img-container-details">
                <img src="{{ asset($produto->url) }}" class="card-img-top" alt="{{ $produto->nome }}">
            </div>
        </div>
        <div class="col">
            <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            <p>Descrição: {{ $produto->descricao }}</p>
            <a href="/produtos">Voltar para a lista</a>

        </div>
        
    </div>
</div>

@include('templates.footer')