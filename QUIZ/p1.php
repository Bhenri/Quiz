<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 2){
    header('location: p2.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p1'];
    $_SESSION['pagina'] = 2;
    Header('location: p2.php');
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
                Quem foi a selecão campeã da Copa de 2010?
            </p>
            <input type="radio" name="p1" value="0">Holanda<br>
            <input type="radio" name="p1" value="1">Espanha<br>
            <input type="radio" name="p1" value="0">Argentina<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
