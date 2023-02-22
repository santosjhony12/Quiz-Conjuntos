<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logoJhony.png">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Game Conjuntos</title>
</head>
<body>

<?php 
session_start();
$_SESSION['nome'] = $_POST['nome'];
?>
    <main>
        <div class="content">
        <h1>Questão 1</h1><h5 style="text-align: end;">1/5</h5>
        <h2>Considere os conjuntos:<br><br>A = {1, 4, 7}<br> B = {1, 3, 4, 5, 7, 8}. <br><br>É correto afirmar que: </h2>

        <form method="post" action="question2.php">
            <div class="botoes">
            <input type="radio" name="answer" value="A"/> a) A contém em B <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="B"/> b) A está contido em B <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="C"/> c) B ⊅ A <br /></div>
            <br>
            <button>Próxima</button>
        </form>
    </div></main>
</body>
</html>