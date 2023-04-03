<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 8){
    header('location: p8.php');
}

if($_POST){
    $_SESSION['pontos'] += $_POST['p7'];
    $_SESSION['pagina'] = 8;
    Header('location: p8.php');
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
                É verdade que a seleção holandesa foi vice três vezes da Copa do Mundo?
            </p>
            <input type="radio" name="p7" value="1">verdadeiro<br>
            <input type="radio" name="p7" value="0">falso<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
