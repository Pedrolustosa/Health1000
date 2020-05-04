<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”description” content="
    Em nossas pesquisar foi observado que, a população têm um déficit
    no conhecer sobre as bácterias e vírus.
    Com isso, criamos esse site com o intuito de ensinar e informar as pessoas
    sobre os fatos citados no ramo da ciência. E para melhorar a plataforma, colocamos um método também de inovador, que
    foi colocado games para entreter as crianças e incentivar os estudos, e assim replicar a sapiência aos outros.
    " />
    <link rel="shortcut icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <title>Home | Saúde1000</title>

</head>



<body style="background-color: #ecf0f1;">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2ecc71; font-weight:bold;">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="Img/nurseLogo.png" alt="Logo"> Saúde1000</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="prevencao.php">Prevenção</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Jogos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="gameQuiz.php">Jogo Quiz</a>
                                <a class="dropdown-item" href="game4Tentativas.php">Jogo das 4 Tentativas</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--Carousel-->
    <section class="animated slideInRight container mt-3" style="font-weight: bold;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Img/virus.png" class="d-block w-100" alt="Vírus">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Vírus</h3>
                        <p style="text-align: justify">Vírus (do latim virus, "veneno" ou "toxina") são pequenos agentes infecciosos, a maioria com 20-300 nm de diâmetro,
                            esar de existirem vírus ɡiɡantes de (0.6–1.5 µm),
                            que apresentam genoma constituído de uma ou várias moléculas de ácido nucleico (DNA ou RNA),
                            as quais possuem a forma de fita simples ou dupla.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Img/bacteria.png" class="d-block w-100" alt="Bácteria">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bactéria</h3>
                        <p style="text-align: justify">Bactéria (do grego βακτηριον, bakterion: bastão) é um tipo de célula biológica.
                            Elas constituem um grande domínio de micro-organismos procariontes.
                            Possuindo tipicamente alguns micrômetros de comprimento, as bactérias podem ter diversos formatos, variando de esferas até bastões e espirais.
                            As bactérias estavam entre as primeiras formas de vida a aparecer na Terra e estão presentes na maioria dos seus habitats.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Img/virusebacteria.png" class="d-block w-100" alt="História da Bácteria e Vírus">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>História</h3>
                        <p style="text-align: justify">A história da biologia traça o estudo do meio vivo desde a Antiguidade até aos tempos modernos.
                            Embora o conceito de biologia enquanto campo científico único e coeso só tenha surgido no século XIX,
                            as ciências biológicas têm origem nas práticas ancestrais de medicina e de história natural que remontam à Ayurveda,
                            à medicina do Antigo Egito e às obras de Aristóteles e Galeno durante a Antiguidade clássica.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--Carousel-->

    <!--Card-->
    <section class="animated slideInLeft container mt-3">
        <h3 class="border-bottom p-2 mb-5">Principais Doenças da História</h3>
        <div class="card-deck">
            <div class="card p-2">
                <img src="Img/pestenegra.png" alt="Peste Negra" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">PESTE NEGRA</h5>
                    <p class="card-text" style="text-align: justify">História: A peste bubônica ganhou o nome de peste negra por causa da pior
                        epidemia que atingiu a Europa,no século 14.
                        Ela foi sendo combatida à medida que se melhorou a higiene e o saneamento das cidades,
                        diminuindo a população de ratos urbanos</p>
                </div>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#pestenegraModal">
                    Continua
                </button>
            </div>

            <div class="card p-2">
                <img src="Img/colera.png" alt="Cólera" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">CÓLERA</h5>
                    <p class="card-text" style="text-align: justify">História – Conhecida desde a Antiguidade, teve sua primeira epidemia global em 1817.
                        Desde então, o vibrião colérico (Vibrio cholerae) sofreu diversas mutações,
                        causando novos ciclos epidêmicos de tempos em tempos</p>
                </div>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#coleraModal">
                    Continua
                </button>
            </div>

            <div class="card p-2">
                <img src="Img/tuberculose.png" alt="Tuberculose" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">TUBERCULOSE</h5>
                    <p class="card-text" style="text-align: justify">História – Sinais da doença foram encontrados em esqueletos de 7 000 anos atrás.
                        O combate foi acelerado em 1882, depois da identificação do bacilo de Koch, causador da tuberculose.
                        Nas últimas décadas, ressurgiu com força nos países pobres, incluindo o Brasil,
                        e como doença oportunista nos pacientes de Aids</p>
                </div>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tuberculoseModal" style="width:90;height:10">
                    Continua
                </button>
            </div>
        </div>
        </div>
    </section>
    <!--Card-->

    <!-- Footer -->
    <div class="animated slideInRight container p-3">

        <div class="row">

            <div class="col-12 mb-3">

                <h3 class="border-bottom p-2 mb-5">Contatos</h3>

            </div>

            <div class="col-sm-4 text-justify">

                <h3>Problemática</h3>

                <p style="text-align: justify">
                    Em nossas pesquisar foi observado que, a população têm um déficit
                    no conhecer sobre as bácterias e vírus.
                    Com isso, criamos esse site com o intuito de ensinar e informar as pessoas
                    sobre os fatos citados no ramo da ciência. E para melhorar a plataforma, colocamos um método também de inovador, que
                    foi colocado games para entreter as crianças e incentivar os estudos, e assim replicar a sapiência aos outros.
                </p>

            </div>

            <div class="col-sm-4">

                <h3>Fontes</h3>

                <div class="list-group text-center">
                    <a href="https://www.sobiologia.com.br/" class="list-group-item list-group-item-action list-group-item-success">SóBiologia</a>
                    <a href="http://bvsms.saude.gov.br/" class="list-group-item list-group-item-action list-group-item-success">BVSMS</a>
                    <a href="https://saude.abril.com.br/" class="list-group-item list-group-item-action list-group-item-success">Saúde Abril</a>
                </div>

            </div>

            <div class="col-sm-4">

                <h3>Redes</h3>

                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-outline-warning" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                </div>

            </div>

            <div class="col-12 mt-5">

                <blockquote class="blockquote text-center">

                    <p class="mb-0">O homem joga sua saúde fora para conseguir dinheiro; depois, usa o dinheiro para reconquistá-la.” </p>
                    <footer class="blockquote-footer">Confúcio<cite title="Source Title"> - Pensador</cite></footer>

                </blockquote>

            </div>

        </div>

    </div>
    <!-- Footer -->

    <!-- Modal -->
    <div class="modal fade" id="pestenegraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PESTE NEGRA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Contaminação: Causada pela bactéria Yersinia pestis, comum em roedores como o rato. É transmitida para o homem pela pulga desses animais contaminados
                    <br>
                    <br>
                    Sintomas: Inflamação dos gânglios linfáticos, seguida de tremedeiras, dores localizadas, apatia, vertigem e febre alta
                    <br>
                    <br>
                    Tratamento: À base de antibióticos. Sem tratamento, mata em 60% dos casos
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="coleraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CÓLERA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Contaminação – Por meio de água ou alimentos contaminados
                    <br>
                    <br>
                    Sintomas – A bactéria se multiplica no intestino e elimina uma toxina que provoca diarréia intensa
                    <br>
                    <br>
                    Tratamento – À base de antibióticos. A vacina disponível é de baixa eficácia (50% de imunização)
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tuberculoseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TUBERCULOSE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Contaminação – Altamente contagiosa, transmite-se de pessoa para pessoa, através das vias respiratórias
                    <br>
                    <br>
                    Sintomas – Ataca principalmente os pulmões
                    <br>
                    <br>
                    Tratamento – À base de antibióticos, o paciente é curado em até seis meses
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>