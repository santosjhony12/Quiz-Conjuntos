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
<body style="justify-content: center; display: flex;">
<?php 


    if($_POST['answer']== "C"){
        session_start();
        $_SESSION['pontuacao']+=20;
    }
    else{
        session_start();
        $_SESSION['pontuacao']+=0;
    }

    $pontuacao = $_SESSION['pontuacao'];
    $nome = $_SESSION['nome'];
    $_SESSION['pontuacao'] = 0;
    $_SESSION['nome']= "";



       echo '<main style="align-items: center; justify-content: center; display: flex;">
       <div class="content">
       <h1>Resultado</h1>
       <h2>';echo $nome; echo ', você atingiu a pontuação de '; echo $pontuacao;echo' pontos</h2>'
;

    ?>
   
    <a href="index.php">Início</a>
    </div></main>
</body>
</html>