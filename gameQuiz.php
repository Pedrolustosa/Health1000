<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Health1000 - Academic Project.">

    <!--Icon-->
    <link rel="shortcut icon" href="Img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="img/nurseLogo.png" type="image/x-icon">

    <!--CSS-->
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Quiz Home | Saúde1000</title>

</head>

<body>
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

    <!--Game-->
    <div class="container2">
        <div id="home" class="flex-center flex-column">
            <h1>Saúde1000 - The Quiz</h1>
            <a class="btn" href="index.php">Menu Inicial</a>
            <a class="btn" href="game.php">Jogar</a>
            <a class="btn" href="highscores.php">Pontuação</a>
        </div>
    </div>
    <!--Game-->

    <!--Script's-->
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>