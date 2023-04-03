<html>
    <head>
    <meta charset="utf_8">
        <title>MegaQuiz</title>
    </head>
    <style type="text/css">
        body{
            font-family: arial black;
            background-color: black;
            color: yellow;
            font-size: 2em;
        }
        form{
            width:40%;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
        }
        input{
            width: 100%;
        }
    </style>
<body>
    <form method="post">
        <fieldset>
            <legend>BEM VINDO</legend>
            SEU NOME:
            <br>
            <input type="text" name="nome"><br>
            <br>
            SEU EMAIL:
            <br>
            <input type="email" name="email"><br>
            <br>
            <button>INICIAR JOGO</button>
        </fieldset>
    </form>
</body>
</html>

<?php
session_start();
if($_POST){
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pontos'] = 0;
    Header('location: p1.php');
}
?>