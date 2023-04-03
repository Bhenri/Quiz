<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 7){
    header('location: p7.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p6'];
    $_SESSION['pagina'] = 7;
    Header('location: p7.php');
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
                Times brasileiros que Ronaldo jogou
            </p>
            <input type="radio" name="p6" value="0">Cruzeiro e Flamengo<br>
            <input type="radio" name="p6" value="0">Atlético Mineiro e Corinthians<br>
            <input type="radio" name="p6" value="0">Cruzeiro e Palmeiras<br>
            <input type="radio" name="p6" value="1">Cruzeiro e Corinthians<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
