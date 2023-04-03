<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 3){
    header('location: p3.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p2'];
    $_SESSION['pagina'] = 3;
    Header('location: p3.php');
}
?>
<html>
    <head>
    <meta charset="utf-8">
        <title>MegaQuiz</title>
        <style type="text/css">
        body{
            font-family: arial black;
            background-color: black;
            color: yellow;
            font-size: 2em;
        }
        form{
            width:auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
        }

    </style>
    </head>
<body>
    <form method="post">
        <fieldset>
            <legend>Bem vindo <?php echo $_SESSION['nome'];?></legend>
            <p>
                O Palmeiras ganhou um mundial em cima do Corinthians?
            </p>
            <input type="radio" name="p2" value="0">Verdadeiro<br>
            <input type="radio" name="p2" value="1">Falso<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
