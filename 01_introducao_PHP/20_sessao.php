<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>SESSION</title>
</head>

<body>
    <?php 

    //Criar a sessão
    $_SESSION['id'] = 2;
    $_SESSION['nome'] = "Cesar";

    //Verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "Id do usuário " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . "<br>";
    }else{
        "A sessão não encontrada!<br>";
    }

    echo "<hr>";

    //Excluir a sessão
    unset($_SESSION['id'], $_SESSION['nome']);

    //Verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "Id do usuário " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . "<br>";
    }else{
        "A sessão não encontrada!<br>";
    }

    ?>
</body>

</html>