@include('templates.header')   
@include('templates.Navbar')   

<div class="container my-5">
    <section class="main">
        <div class="catalog-header text-center">
            <h1 class="title">Nosso Cardápio</h1>
            <button type="button" class="btn btn-outline-primary">Tudo</button>
            <button type="button" class="btn btn-outline-primary">Biscoitos</button>
            <button type="button" class="btn btn-outline-primary">Bolos</button>
            <button type="button" class="btn btn-outline-primary">Pães</button>
            <button type="button" class="btn btn-outline-primary">Kits</button>
        </div>

        <div class="featured-products">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3">
                
                @foreach ($produtos as $prod)
                    <div class="col">
                        <div class="card product-card h-100">
                            <div class="img-container">
                                <img src="{{ asset($prod->url) }}" class="card-img-top" alt="{{ $prod->nome }}">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $prod->nome }}</h5>
                                <p class="card-text">{{ $prod->descricao }}</p>
                                <p class="fw-bold text-primary mb-3">R$ {{ number_format($prod->preco, 2, ',', '.') }}</p>
                                <div class="mt-auto">
                                    <a href="{{ route('produto.details', $prod->id) }}"
                                        class="btn btn-outline-primary btn-sm">+ Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>

@include('templates.footer')