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
    if($_POST['answer']== "B"){
        session_start();
        $_SESSION['pontuacao']+=20;
    }
    else{
        session_start();
        $_SESSION['pontuacao']+=0;
    }
    ?>

    <main>
        <div class="content">
        <h1>Questão 3</h1><h5 style="text-align: end;">3/5</h5>
        <h2>Tendo o conjunto A={ø, {ø}}, quais são as P(A): </h2>

        <form method="post" action="question4.php">
            <div class="botoes">
            <input type="radio" name="answer" value="A"/> a) {ø, {ø}, {{ø}}, A} <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="B"/> b) {ø, {ø}, {{ø}}, {{ø}}} <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="C"/> c) {{ø}, {{ø}}, {{ø}}} <br /></div>
            <br>
            <button>Próxima</button>
        </form>
    </div></main>
</body>
</html>