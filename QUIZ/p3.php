<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 4){
    header('location: p4.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p3'];
    $_SESSION['pagina'] = 4;
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
                Time rebaixado na série C do Campeonato Brasileiro
            </p>
            <input type="radio" name="p3" value="0">Cruzeiro<br>
            <input type="radio" name="p3" value="0">Flamengo<br>
            <input type="radio" name="p3" value="1">Fluminense<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
