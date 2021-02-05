<?php
    session_start()
?>

<!DOCTYPE html>
<html>

<head>
</head>
<body>
<p> Formulario de Inscricao para Competidores </p>

<form action='script.php' method="post">    
    <?php  
       $mensagemDeErro = isset($_SESSION['msgerro']) ? $_SESSION['msgerro'] : '' ;
       if(!empty($_SESSION['msgerro']))
       {
           echo $mensagemDeErro;
       }
    ?>

    <p> Seu nome : <input type="text" name="nome" /> </p>
    <p> Sua idade: <input type="text" name="idade" /> </p>
    <p> <input type="submit" /> </p>
</form>

</body>

</html>