<?php
session_start();
//verificando se o nome não está na sessão = significa que ele não passou pela index
if(!isset($_SESSION['nome'])){
Header('location: index.php'); //manda ele para pagina index
}
?>
<html>
<head>
      <meta charset='utf-8'>
      <title>MegaQuiz</title>

      <p><?php echo $_SESSION['nome'];?></p>

      <p>O seu resultado foi: </p><?php echo $_SESSION['pontos']; echo " pontos";?>
      <style type="text/css">
        body{
            font-family: arial black;
            background-color: black;
            color: yellow;
            font-size: 2em;
        }
</head>
<body>
      
</body>
</html>
