<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/nurseLogo.png" type="image/x-icon">
    <link rel="icon" href="img/nurseLogo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/game.css" />

    <title>Quiz | Saúde1000</title>

</head>

<body >
    
    <!-- obs -->
    <div class="container">
        <div id="loader"></div>
        <div id="game" class="justify-center flex-column hidden">
            <div id="hud">
                <div id="hud-item">
                    <p id="progressText" class="hud-prefix">
                        Perguntas
                    </p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>
                <div id="hud-item">
                    <p class="hud-prefix">
                        Pontos
                    </p>
                    <h1 class="hud-main-text" id="score">
                        0
                    </h1>
                </div>
            </div>
            <h2 id="question"></h2>
            <div class="choice-container">
                <p class="choice-prefix">A</p>
                <p class="choice-text" data-number="1"></p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">B</p>
                <p class="choice-text" data-number="2"></p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">C</p>
                <p class="choice-text" data-number="3"></p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">D</p>
                <p class="choice-text" data-number="4"></p>
            </div>
        </div>
    </div>

    <script src="js/game.js"></script>

</body>

</html>