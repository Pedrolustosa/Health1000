<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Saúde1000</title>

    <!--Icon-->
    <link rel="shortcut icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/dashboard.css">



</head>

<body>

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
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
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
    <!--Navbar-->
    <section class="animated slideInRight container p-4">
        <div class="col-12 mb-3">

            <h3 class="border-bottom p-2 mb-5">Estatísticas</h3>

        </div>
        <div class="card-content">
            <div class="chart-area">
                <div style="height: 100%;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div></div>
                        </div>
                    </div>
                    <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor" style="display: block; height: 400px; width: 1197px;"></canvas>
                </div>
            </div>
        </div>
        </div>
    </section>

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
                    <a href="https://www.dw.com/pt-br/entenda-a-diferen%C3%A7a-entre-v%C3%ADrus-e-bact%C3%A9rias/a-17615512" class="list-group-item list-group-item-action list-group-item-success">DW</a>
                </div>

            </div>

            <div class="col-sm-4">

                <h3>Redes</h3>

                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-outline-warning" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a class="btn btn-outline-dark" href="https://github.com/Pedrolustosa/Health1000"><i class="fab fa-github"></i> Github</a>
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

    <!-- Stuff below is for demo-only -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>