<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 5){
    header('location: p5.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p4'];
    $_SESSION['pagina'] = 5;
    Header('location: p4.php');
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
                O Tigres do México ganhou a Libertadores de 2015?
            </p>
            <input type="radio" name="p4" value="0">Verdadeiro<br>
            <input type="radio" name="p4" value="1">Falso<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
