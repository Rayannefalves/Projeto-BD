@include('templates.header')
@include('templates.Navbar')

<div class="container my-5">
    <section class="main">
        <div class="title mb-4">
            <h1>Doces e pães artesanais</h1>
            <p class="text">Faça seu pedido pelo site e escolha a data de entrega. Atendemos Guaratinguetá,
                Aparecida e Lorena.
            </p>
        </div>

        <div class="buttons-action mb-5">
            <a href="/produtos" class="btn btn-primary" role="button">Ver Cardapio</a>
            <a href="#" class="btn btn-success" role="button">Falar no WhatsApp</a>
        </div>

        <div class="featured-products">
            <h2 class="title mb-1">Destaques</h2>
            <p class="text text-muted mb-4">Conheça nossos produtos</p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

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

    <section id="about-us" class="mt-5">
        <h2 class="title">Sobre Nós</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ipsa, quos velit dolorum quasi minus
            quaerat amet autem aperiam. Eveniet, non. Harum corrupti odit cum quo ipsum, ut officiis illum?</p>
    </section>
</div>

@include('templates.footer')