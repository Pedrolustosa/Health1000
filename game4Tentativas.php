<!Doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Health1000 - Academic Project.">

    <!--Icon-->
    <link rel="shortcut icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="Img/nurseLogo.png" type="image/x-icon">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game4tentativas.css">

    <title>Jogo 4 Tentativas | Saúde1000</title>

</head>

<body style="background-color: #ecf0f1;">

    <!--NavBar-->
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

    <!--Main-->
    <main>

        <br>
        <!--Game-->
        <section class="container">
            <h1 class="custonT1">Jogo da Forca</h1>
            <h2 class="custonT2" id="tagDica"></h2>

            <div id="tagPalavra"></div>

            <input type="text" class="form-control" maxlength="1" id="tagAdivinhaLetra" placeholder="Escolha uma LETRA e digite aqui. Boa Sorte!" style="width: 350px" required />
            <br>

            <button type="button" class="btn btn-outline-success" id="tagBtVerificaLetra">Enviar Letra</button>
            <button type="button" class="btn btn-outline-success" id="tagBtSorteiaPalavra">Sortear Nova Palavra</button>
            <button type="button" class="btn btn-secondary" style="height: 35px">
                <p class="custonP1">Total de erros:<span class="badge badge-pill badge-light" id="tagTotErros"></span> / 4</p>
            </button>
            <br>
            <br>
        </section>
        <!--Game-->
    </main>
    <!--Main-->


    <!--Script's-->
    <script src="js/game4Tentativas.js"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>