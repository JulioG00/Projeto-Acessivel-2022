<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Matéria - Groot</title>
</head>

<div class="BotaoConteudoPrincipal">
    <button onclick="window.location.href='materia-Groot.php#Arqueiro';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
        Direto para O conteúdo Principal</button>
</div>

<?php include 'header.php'; ?>

<header class="col-sm-12 col-md-12 col-lg-12">
    <img class="img-fluid img1 w-100" src="images/destaque1440x250.jpg" alt="Personagens da Marvel do lado esquerdo de frente com os Personagens da DC ao lado direito.">
</header>

<body>

    <div class="container-fluid">
        <main>
            <div class="row">
                <h1 id="Arqueiro" class="nommat">Baby Groot</h1>
                <article class="col-xs-10 col-sm-12 col-md-12 col-lg-9">
                    <div class="navmat">
                        <nav>

                            <a onclick="window.location.href='materia-Groot.html#conti';" class="listmat">Baby Groot</a>
                            <a onclick="window.location.href='materia-Groot.html#Ator';" class="listmat">Vin Diesel</a>
                            <a onclick="window.location.href='materia-Groot.html#curioso';" class="listmat">Curiosidades</a>
                        </nav>
                    </div>

                    <p class="ppmat">Após a sua morte ser confirmada em Guardiões da Galáxia Vol.2 pelo diretor James Gunn, onde o mesmo já está escrevendo o novo filme Guardiões da Galáxia Vol.3, já declarado que não estará presente o personagem Groot, o diretor confirmou a estréia do filme "I am Groot" para 2022.</p>
                    <p class="ppmat">Foi através de suas redes sociais que James Gunn confirmou e afirmou que será uma série de curta-metragens animados estrelados pelo Baby Groot e será exibida pela Disney+, sendo confirmada para dia 10 de Agosto.</p>

                    <div class="postmat">
                        <img class="pomat" src="images/poster.jpg" alt="Poster oficial de I am Groot. Groot deitado em uma cadeira de praia e dois alienigenas brancos o observando de trás de um coqueiro de papelão.">
                        <p>Poster oficial de lançamento.</p>
                    </div>

                    <h3 class="hmat">O ator por trás de Groot?</h3>
                    <p class="ppmat">Baby Groot já foi interpretado por vários atores. Dentre eles está o ator Vin Diesel, hoje com 54 anos, que fornece sua voz ao personagem no filme.</p>

                    <h3 class="hmat">Curiosidades sobre o Groot</h3>
                    <p class="ppmat">A palavra Groot vem do holandês e significa grande. Devido a isso foi se dado o nome ao personagem que além de grande em sua vida adulta ele é capaz de almentar de tamanho.</p>

                    <div class="row fmat">
                        <div class="col-xs-10 col-sm-6 col-md-4 col-lg-4">
                            <img class="rounded asmat1" src="images/grootbaby.jpeg" alt="Imagem do Baby Groot andando">
                        </div>
                        <div class="col-xs-10 col-sm-6 col-md-4 col-lg-4">
                            <img class="rounded asmat" src="images/vin.jpg" alt=" Imagem do ator Vin Diesel sorrindo">
                        </div>
                    </div>
                </article>

                <aside class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">

                    <div class="row">
                        <div class="col-md-6 col-lg-12 float-start">
                            <div class="card">
                                <section class="sec3">
                                    <img class="card-img-top" src="images/loki296x176.jpg" alt=" Imagem Loki em quadrinho lado esquerdo e Loki filme lado direito">
                                    <h3 class="hmat">Loki</h3>
                                    <h5 class="hmat1">Autor: Ana Clara</h5>
                                    <p class="pmat">Conheça mais sobre Loki, famoso personagem da Marvel</p>
                                    <button type="button" class="btn btn-primary buttonm" onclick="window.location.href='materia-loki.php';">Saiba mais</button>
                                </section>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 float-start">
                            <div class="card ">
                                <section class="sec3">
                                    <img class="card-img-top" src="images/panteranot390x194.jpg" alt="Imagem Pantera Negra em quadrinho lado esquerdo e Pantera Negra filme lado direito">
                                    <h3 class="hmat">Pantera Negra</h3>
                                    <h5 class="hmat1">Autor: Júlio Gabriel</h5>
                                    <p class="pmat">Conheça a história de T'Challa, o famoso Pantera Negra -
                                        Wakanda
                                        Forever</p>
                                    <button type="button" class="btn btn-primary buttonm" onclick="window.location.href='materia-pantera.php';">Saiba mais</button>
                                </section>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 float-start">
                            <div class="card">
                                <section class="sec3">
                                    <img class="card-img-top" src="images/venom296x176.jpg" alt="Imagem Venom em quadrinho lado esquerdo e Venom filme lado direito">
                                    <h3 class="hmat">Venom</h3>
                                    <h5 class="hmat1">Autor: Allysson Ernandes</h5>
                                    <p class="pmat">Conheça mais sobre Venom, famoso personagem da Marvel</p>
                                    <button type="button" class="btn btn-primary buttonm" onclick="window.location.href='materia-venom.php';">Saiba mais</button>
                                </section>
                            </div>
                        </div>

                    </div>
                </aside>

                <footer class="BotaoVoltarAoTopo row pt-5">
                    <button onclick="window.location.href='materia-Groot.php#Arqueiro';" class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
                </footer>
            </div>
        </main>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>