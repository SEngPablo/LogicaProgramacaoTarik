<?php
session_start();

if (isset($_POST["enviar"])) {

    $funcionario = array("nome" => $_POST["nome"], "salario" => $_POST["salario"]);

    if (isset($_SESSION["funcionarios"])){
        array_push($_SESSION["funcionarios"], $funcionario);
    }else{
        $_SESSION["funcionarios"] = array($funcionario);
    }

}
?>

<?php
    if (isset($_GET["apagar"])){
        session_unset();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>

<body>
    <form action="funcionario.php" method="POST">

        <label> Nome: </label>
        <input type="text" name="nome">

        <br>

        <label> Salário: </label>
        <input type="number" name="salario">
        <br>

        <input type="submit" name="enviar" value="Enviar">

    </form>

    <?php

    if (isset($_SESSION["funcionarios"])) {

        $funcionarios = $_SESSION["funcionarios"];

        foreach ($funcionarios as $funcionario){
            echo "{$funcionario['nome']} | {$funcionario['salario']} <br>";
        }

        
    }else{
        echo"Não há funcionários cadastrados";
    }

    ?>
    <form action="funcionario.php" method="GET">
        <input type="submit" name="apagar" value="Apagar">
    </form>

    
</body>

</html>