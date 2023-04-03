<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 6){
    header('location: p6.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p5'];
    $_SESSION['pagina'] = 6;
    Header('location: p6.php');
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
                Maior campeão da UEFA Champions League
            </p>
            <input type="radio" name="p5" value="0">Barcelona<br>
            <input type="radio" name="p5" value="0">Milan<br>
            <input type="radio" name="p5" value="1">Real Madrid<br>
            <input type="radio" name="p5" value="0">Bayern<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
