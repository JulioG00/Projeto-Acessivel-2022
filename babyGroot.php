<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Baby Groot</title>
</head>

<body>

    <div class="BotaoConteudoPrincipal">
        <button onclick="window.location.href='babyGroot.php#topo';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>

    <Header class="headerDoninha row">
        <img class="img-fluid" src="images/Grootbanner.jpg" alt="Imagem do rosto do personagem Baby Groot e na frente a logo escrito I'm Groot">

    </Header>

    <div class="container-fluid">



        <div class="row">

            <h1 id="topo" class="p-5 topo NomePersonagemMarvel">Baby Groot</h1>

            <div class="col-12 col-lg-12 col-xl-8 float-xl-start">
                <article>



                    <p class="pb-5 pt-5">
                        Groot ficou muito conhecido, ultimamente, por conta do filme de James Gunn e voltou aparecer como bebê em Guardiões da galáxia.
                        Sua primeira aparição se deu em 1960 na Tales to Astonish #13.
                        No início de tudo Groot era apenas um vilão da Marvel, pertencente à espécie alienigena, os Colossos Florais. Podiamos verificar também que Groot conseguia
                        falar mais palavras do que apenas as três que o público conhece, e foi com o passar do tempo que introduziram a informação de que as cordas vocais do personagem
                        eram espessas o que dificulta sua comunicação e faz com que ele só consiga falar: "Eu sou Groot"!
                    </p>

                    <div class="row">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/groothq.webp" alt="Imagem do Baby Groot no filme">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/groot1.jpg" alt="imagem do Baby Groot em quadrinho atrás de uma borboleta.">

                    </div>


                    <div>


                        <h2 class="p-5">Vídeos do Baby Groot</h2>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1 float-lg-start videoDoninha" data="https://www.youtube.com/embed/y0y5tnzzM8I">Link parte do filme onde aparece a morte de Groot.</object>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1  videoDoninha" data="https://www.youtube.com/embed/1jaocSs-OWg">Link para um trecho do filme Guardiões da Galáxia 2 onde Baby Groot aparece.</object>
                    </div>


                    <h2 class="p-5">
                        Resumo personagem
                    </h2>
                    <p class="pb-5">
                        Groot é um personagem fictício que aparece nas histórias em quadrinhos publicadas pela Marvel Comics. Sua primeira versão foi criada por Stan Lee, Jack Kirby e Dick Ayers.
                        O personagem foi reformulado em 2006 por Keith Giffen e Timothy Green II para ser um nobre herói, aparecendo pela primeira vez no enredo Annihilation: Conquest em setembro de 2007.
                        Desde sua estréia no cinema e estréia na série animada, Groot se tornou um ícone da cultura pop e sua frase "Eu sou o Groot" se tornou um meme da Internet.
                    </p>

                    <img class="col-12 pb-5" src="images/grootfilme.jpg" alt="imagem do Groot adulto e do Baby Groot quando pequeno">

                    <p>
                        Groot é uma árvore alienígena poderosa, ele possui várias habilidades físicas semelhantes a uma árvore normal e grande, e entre elas uma força maior que o normal, capaz de vencer lutando mão-a-mão e derrubar e quebrar qualquer objeto. Groot também pode se regenerar e reconstruir membros feridos.
                        E além disso Groot também pode fazer crescer seus membros em formas de cipós e pode liberar esporos de luz.
                        Em sua idade adulta, Groot encontrava-se no Planeta Hala, capital dos Kree, onde é prontamente capturado e aprisionado. Enquanto na prisão, ele começa uma amizade com Rocket Raccoon e é designado para uma equipe de operações secretas liderada pelo Senhor das Estrelas, cujo objetivo era atacar Hala e derrotar Phalanx.
                        Em meio a batalha, seu corpo é destruído, mas um pequeno galho dele fica preservado, Groot agora pequeno, passa a viajar sob os cuidados de Rocket, assim, ele consegue voltar a crescer com o tempo.
                    </p>

                </article>

                <!-- outros personagens -->
                <div class="col-lg-12 float-xl-end col-xl-12">
                    <h2 class="p-5">
                        Outros personagens
                    </h2>

                    <div class="row m-lg-5">
                        <Section class="col-12 col-md-6 col-lg-6  float-start">
                            <h6 class="invisible">Pantera Negra</h6> <!-- para ocultar o texto do titulo e não acusar "warning" no validador w3c-->
                            <img class="pb-5 col-6 col-md-6 col-xl-6 imagemPersonagemDC" src="images/Per-pantera.png" alt="Imagem do personagem Venom com metade de sua face, e a outra metade com a face de seu hospedeiro">
                            <p class="col-md-12">Conheça a história de T'Challa, príncipe do reino de Wakanda, que perde o seu pai e viaja para os Estados Unidos, onde tem contato com os Vingadores.... </p>
                            <button onclick="window.location.href='pantera.php'" class="botaonoticiaDC">Clique aqui</button>
                        </Section>

                        <Section class="pb-5 col-md-6 col-lg-6">
                            <h6 class="invisible">Doninha</h6>
                            <img class="col-6 col-lx-6 pb-5 imagemPersonagemDC" src="images/Per-Doninha.png" alt="Imagem do persnogem Loki com sua roupa verde, com enfeites na cabeça cor de ouro e com um enorme sorriso diabólico">
                            <p class="col-md-12">Nos quadrinhos, Doninha, cujo nome verdadeiro é John Monroe, é na verdade um ser humano que veste uma fantasia do mamífero homônimo para cometer seus crimes....</p>
                            <button onclick="window.location.href='doninha.php'" class="botaonoticiaDC">Clique
                                aqui</button>
                        </Section>
                    </div>
                </div>

            </div>



            <aside class="col-sm-12 col-md-12 col-lg-12 col-xl-4 ">

                <h2 class="p-5 "> Notícias</h2>

                <div class="row">

                    <div class=" pb-5 float-sm-start float-lg-none col-md-6 row-col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/babygroot390x194.jpg" alt="Imagem do Baby Groot quadrinho lado esquerdo e filme lado direito">
                        <h3>Conheça mais sobre Groot</h3>
                        <h6>Autor: Nayara Nunes</h6>
                        <p>Baby Groot já foi interpretado por vários atores. Dentre eles está o ator Vin Diesel...
                        </p>
                        <button onclick="window.location.href='materia-Groot.php'" class="botaonoticiaDC">Clique aqui</button>
                    </div>

                    <div class="pb-5 col-md-6 float-sm-end col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/super-choque.jpg" alt="Imagem do personagem Super choque">
                        <h3>Quais são os criadores de Super-Choque?</h3>
                        <h6>Autor: Júlio Gabriel</h6>
                        <p>O Super Choque(Static Shock - em inglês), foi criado pelo próprios fundadores da editora Milestone Comics..
                        </p>
                        <button onclick="window.location='materia-superchoque.php'" class="botaonoticiaDC">Clique aqui</button>
                    </div>
                </div>


            </aside>



            <footer class="BotaoVoltarAoTopo row">
                <button onclick="window.location.href='babyGroot.php#topo#topo';" class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
            </footer>
        </div>

    </div>

<?php include 'footer.php';?>
</body>

</html>