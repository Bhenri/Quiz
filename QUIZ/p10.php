<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']> 11){
    header('location: resultado.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p10'];
    $_SESSION['pagina'] = 10;
    Header('location: resultado.php');
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
                Quais os clubes derrotados pelo Corinthians nas finais do mundial?
            </p>
            <input type="radio" name="p10" value="0">Manchester United e Chelsea<br>
            <input type="radio" name="p10" value="0">Real Madrid e Chelsea<br>
            <input type="radio" name="p10" value="0">Vasco e Al-Ahly<br>
            <input type="radio" name="p10" value="1">Vasco e Chelsea<br>
            <input type="radio" name="p10" value="0">Real Madrid e Al-Ahly<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
