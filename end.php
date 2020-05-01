<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="img/nurseLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/app.css" />

    <title>Parabéns!</title>


</head>

<body>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore"></h1>
            <form>
                <input type="text" name="username" id="username" placeholder="username" />
                <button type="submit" class="btn"  id="saveScoreBtn" onclick="saveHighScore(event)" disabled>
                    Salvar
                </button>
            </form>
            <a class="btn" href="game.php">Jogar Novamente</a>
            <a class="btn" href="index.php">Voltar</a>
        </div>
    </div>
    <script src="js/end.js"></script>
</body>

</html>