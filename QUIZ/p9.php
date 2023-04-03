<?php
session_start();
if(!isset($_SESSION['nome'])){
    Header('location: index.php');
}
if(isset($_SESSION['pagina']) && $_SESSION['pagina']>= 10){
    header('location: p10.php');
}
if($_POST){
    $_SESSION['pontos'] += $_POST['p9'];
    $_SESSION['pagina'] = 10;
    Header('location: p10.php');
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
                É verdade que a Ponte Preta é cidade de:
            </p>
            <input type="radio" name="p9" value="1">Campinas<br>
            <input type="radio" name="p9" value="0">São Paulo<br>
            <input type="radio" name="p9" value="0">Bragança Paulista<br>
            <button>próxima</button>
        </fieldset>
    </form>
</body>
</html>
