@include('templates.header')   
@include('templates.Navbar')   

    <div class="container mt-3">
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h1">Todos os Produtos</h1>
        </div>

        <div class="row g-3">
            
            @foreach ($produtos as $produto)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-header">
                        <img src="{{$produto->url}}" alt="{{$produto->nome}}" class="w-100">
                    </div>
                    <div class="card-body">
                        <h2 class="h5">{{ $produto->nome }}</h2>
                        <p>{{ $produto->descricao }}</p>
                        <p class="fw-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">+ Detalhes</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#">Editar</a>
                        <a class="btn btn-outline-danger btn-sm" href="#">Excluir</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@include('templates.footer')   