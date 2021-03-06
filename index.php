<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="_img/_logos/logo_aba.png">
        <title>Happy Amazônia | Móveis sob medida</title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <link rel="stylesheet" href="_css/master.css">

    </head>
    
    <body class="bg-light">
        <header>
            <nav class="container py-2">
                <div class="row align-items-center">
                    <img class=" col-12 col-lg-3" src="_img/_logos/happy_logo.png" alt="Logo da Happy Amazônia">
                    
                    <div class="col"></div>

                    <section class="bg-happy-yellow rounded-left col-12 col-lg-5">
                        <ul class="nav d-flex justify-content-center tamanho-letra">
                            <li class="nav-item">
                                <a class="nav-link active color-happy-dark bg-happy-selected" href="index.php">Início</a>
                            </li>
        
                            <li class="nav-item dropdown">
                                <a class="nav-link color-happy-dark bg-selected bg-happy-yellow dropbtn dropdown-toggle" href="_pages/produtos.php">Produtos</a>
                                <div class="dropdown-content">
                                    <a href="_pages/moveis_sob_medida.php"> • Móveis sob medida</a>
		                            <a href="_pages/produtos_de_limpeza.php"> • Produtos de limpeza</a>
                                    <a href="hotalicas.php"> • Hortaliças Happy</a>
		                            <a href="_pages/promocoes.php"> • Promoções</a>
                                </div>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link color-happy-dark bg-selected" href="_pages/sobre_nos.php">Sobre Nós</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link color-happy-dark bg-selected" href="_pages/fale_conosco.php">Fale Conosco</a>
                            </li>
                        </ul>
                    </section>
                    
                    <div class="rounded-right bg-happy-blue linha-vertical tamanho-letra text-center col-12 col-lg-3 pt-3 center justify-content-end">
                        <p class="font-weight-bold text-white">vendas@happyamazonia.com<br>Telefone: (92) 99874-7412<br>Segunda a Sexta - 8h às 18h</p>
                    </div>

                </div>
            </nav>

            <section class="pb-2 container">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="_img/_carousel/slide3.jpg" class="d-block w-100" alt="Foto de mesa de escritório">
                            <div class="carousel-caption d-none d-md-block shadow-text text-left">
                                <h1>Móveis planejados para escritório</h1>
                                <p class="text-size-15">Tenha um local adequado para as reuniões com a sua equipe de trabalho.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="_img/_carousel/slide1.jpg" class="d-block w-100" alt="Foto de armário de banheiro">
                            <div class="carousel-caption d-none d-md-block shadow-text text-left">
                                <h1>Móveis planejados para banheiros</h1>
                                <p class="text-size-15">Tenha o móvel adequado para o tamanho e modelo do seu banheiro.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="_img/_carousel/slide2.jpg" class="d-block w-100" alt="Foto de armário de cozinha">
                            <div class="carousel-caption d-none d-md-block shadow-text text-right">
                                <h1>Móveis planejados para cozinha</h1>
                                <p class="text-size-15">Aproveite o espaço e guarde suas coisas da melhor maneira possível.</p>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                </div>
            </section>

        </header>

        <main class="">
            <section class="container">
                <section class="row align-items-center pt-4 pb-5 card-focus">
                    <div class="col-12 col-lg-4 pb-2 bg-happy-blue text-white text-center card-blue-fix-size link-modal-blue card-focus-none">
                        <a data-toggle="modal" role="button" href="#limpezaBackDrop">
                            <h2 class="font-weight-bold pt-4">Produtos de Limpeza</h2>
                            <img class="rounded-circle img-circle-size2" src="_img/_expos/promo1.jpg" alt="Modelo de Painel de Televisão">
                            <p class="pt-2">
                                Guarda-roupas, painéis para televisão, armários, mesas e muito mais.
                            </p>
                        </a>

                        <section class="modal fade show" id="limpezaBackDrop" tabindex="-1" aria-labelledby="limpezaBackdropLabel">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-happy-yellow">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark-happy font-weight-bold" id="limpezaBackdropLabel">Linha Doméstica</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <img class="w-100" src="_img/_expos/promo1.jpg" alt="Painel de Televisão">
                                        <img class="w-100" src="_img/_expos/promo1.jpg" alt="Painel de Televisão">
                                    </div>

                                    <div class="modal-footer">
                                        <a class="" href="_pages/moveis_sob_medida.php">
                                            <button type="button" class="btn btn-primary">Saiba mais <img src="../_img/_icons/send-icon.svg" alt="Imagem representando enviar"> </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-12 col-lg-4 pb-2 bg-happy-yellow text-center card-yellow-fix-size link-modal-yellow card-focus-none">
                        <a class="text-dark-happy" data-toggle="modal" role="button" href="#moveisBackDrop">
                            <h2 class="font-weight-bold pt-4">Móveis Planejados</h2>
                            <img class="rounded-circle img-circle-size1" src="_img/_expos/promo2.jpg" alt="Modelo de mesa L">
                            <p class="pt-2 px-2">
                                Escrivaninhas, mesas para reunião, quadro de notícias, tudo para o seu escritório.
                            </p>
                        </a>

                        <section class="modal fade show" id="moveisBackDrop" tabindex="-1" aria-labelledby="moveisBackdropLabel">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-happy-yellow">
                                    <div class="modal-header">
                                        <h5 class="modal-title  text-dark-happy font-weight-bold" id="moveisBackdropLabel">Linha Office</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <img class="w-100" src="_img/_expos/promo2.jpg" alt="Modelo de mesa L">
                                        <img class="w-100" src="_img/_expos/promo2.jpg" alt="Modelo de mesa L">
                                    </div>

                                    <div class="modal-footer">
                                        <a class="text-hover-white" href="_pages/moveis_sob_medida.php">
                                            <button type="button" class="btn btn-primary">Saiba mais <img src="../_img/_icons/send-icon.svg" alt="Imagem representando enviar"> </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-12 col-lg-4 pb-2 bg-happy-blue text-white text-center card-blue-fix-size link-modal-blue card-focus-none">
                        <a data-toggle="modal" role="button" href="#hortaBackDrop">
                            <h2 class="font-weight-bold pt-4">Hortaliças Happy</h2>
                            <img class="rounded-circle img-circle-size2" src="_img/_expos/promo3.jpg" alt="Modelo de armário">
                            <p class="pt-2">
                                Confira as nossas promoções e encontre<br>o melhor orçamento para você.
                            </p>
                        </a>

                        <section class="modal fade show" id="hortaBackDrop" tabindex="-1" aria-labelledby="hortaBackdropLabel">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-happy-yellow">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark-happy font-weight-bold" id="hortaBackdropLabel">Linha Econômica</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <img class="w-100" src="_img/_expos/promo3.jpg" alt="Modelo de armário">
                                        <img class="w-100" src="_img/_expos/promo3.jpg" alt="Modelo de armário">
                                    </div>

                                    <div class="modal-footer">
                                        <a class="" href="_pages/moveis_sob_medida.php">
                                            <button type="button" class="btn btn-primary">Saiba mais <img src="../_img/_icons/send-icon.svg" alt="Imagem representando enviar"> </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </section>

                <section class="row align-items-center pb-3 mb-3">
                    <div class="col-12 col-lg-4 text-center">
                        <img class="objects-icons" src="_img/_icons/smile.svg" alt="Figura representando um cliente">
                        <h2 class="font-weight-bold">Foco no Cliente</h2>
                        <p class="">
                            Nossos clientes são a razão da nossa existência. Nos comprometemos 
                            a atender suas demandas no prazo e local.
                        </p>
                    </div>

                    <div class="col-12 col-lg-4 text-center">
                        <img class="objects-icons" src="_img/_icons/security.svg" alt="Imagem que representa segurança">
                        <h2 class="font-weight-bold">Segurança</h2>
                        <p class="">
                            Somos rigorosos no cumprimento dos nossos padrões, prezando pela 
                            segurança dos nossos clientes e colaboradores.
                        </p>
                    </div>

                    <div class="col-12 col-lg-4 text-center">
                        <img id="peoples-size" src="_img/_icons/peoples.svg" alt="Imagem que representa equipe">
                        <h2 class="font-weight-bold">Trabalho em Equipe</h2>
                        <p class="">
                            Juntos, com cada colaborador, lutamos para alcançar os seus objetivos; 
                            confiamos uns nos outros, compartilhando conquistas.
                        </p>
                    </div>

                </section>

                <div class="row bg-happy-yellow justify-content-center rounded-top">
                    <h2 class="font-weight-bold px-4 py-4 text-center">Clientes Happy Satisfeitos</h2>
                </div>

                <section class="bg-happy-yellow row text-center pb-4 px-4">
                    <div class="col-12 col-lg-3">
                        <img src="_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </section>

                <section class="row mb-5">
                    <div class="col-12 col-lg-8 px-0">
                        <video controls class="video-size" src="_videos/vid-1.mp4" type="video/mp4"></video>
                    </div>

                    <div id="card-blue-click" class="col-12 col-lg-4 px-4 pt-4 text-white text-center bg-happy-blue">
                        <h3 class="font-weight-bold pb-1">Gostou?</h3>
                        <p>Quer falar conosco para nos contar como podemos
                            ajudar você a se sentir realizado com móveis planejados sob medida?
                        </p>

                        <div class="px-2">
                            <a id="click-here" href="_pages/fale_conosco.php"><button type="button" class="btn w-100 font-weight-bold text-size20">Clique Aqui!</button></a>
                        </div>
                        <img class="pt-3 pb-4" id="img-click" src="_img/_icons/click-icon.svg" alt="Imagem representando clique">
                    </div>
            </section>

        </main>

        <footer class="d-block bg-happy-blue pt-3">
            <section class="container">
                <section class="row text-center text-light tamanho-letra">
                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                </section>

            </section>
        </footer>

    </body>

    <script src="_js/jquery.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>

</html>