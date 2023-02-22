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
<body><?php 
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
        <h1>Questão 2</h1><h5 style="text-align: end;">2/5</h5>
        <h2>Qual a possível lei de formação do conjunto A = {2, 3, 5, 7, 11}? </h2>

        <form method="post" action="question3.php">
            <div class="botoes">
            <input type="radio" name="answer" value="A"/> a) A = {x|x é um número simétrico e 2 < x < 15} <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="B"/> b) A = {x|x é um número primo e 1 < x < 13} <br /></div>
            <div class="botoes">
            <input type="radio" name="answer"value="C"/> c) A = {x|x é um número ímpar positivo e 1 < x < 14} <br /></div>
            <br>
            <button>Próxima</button>
        </form>
    </div></main>
    
</body>
</html>