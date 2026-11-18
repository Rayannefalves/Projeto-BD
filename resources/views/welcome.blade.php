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

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">

                <!--ADD O FOREACH COM OS PRODUTOS DO BANCO-->

                    <div class="col">
                        <div class="card product-card h-100">
                            <img src="../assets/img/sunflower.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text...</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card product-card h-100">
                            <img src="../assets/img/sunflower.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text...</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us">
            <h2 class="title">Sobre Nós</h2>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ipsa, quos velit dolorum quasi minus
            quaerat amet autem aperiam. Eveniet, non. Harum corrupti odit cum quo ipsum, ut officiis illum? Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Animi quis optio incidunt odio provident placeat nisi ut,
            voluptatum, officia ipsum inventore sequi minus reprehenderit suscipit sunt sit consectetur ratione
            harum?Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        </section>
    </div>

@include('templates.footer')   