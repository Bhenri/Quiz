<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 9){
    header('location: p9.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p8'];
    $_SESSION['pagina'] = 9;
    Header('location: p9.php');
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
                O Santos Futebol Clube tem:
            </p>
            <input type="radio" name="p8" value="0">1 Mundial e 3 Libertadores<br>
            <input type="radio" name="p8" value="1">2 Mundiais e 3 Libertadores<br>
            <input type="radio" name="p8" value="0">3 Mundiais e 3 Libertadores<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
