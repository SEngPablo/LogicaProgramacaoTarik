<?php 
require_once "classeFuncionario.php"; // O erro era a ordem!!!

session_start();

if (isset($_POST['limparFuncionarios'])) {
    unset($_SESSION['funcionarios']);
}
?>



<?php



if (isset($_POST['nome']) && isset($_POST['salario']) && isset($_POST['cargo']) && isset($_POST['id'])) {

    $funcionario = new Funcionario($_POST['id'], $_POST['nome'], $_POST['salario'], $_POST['cargo']);

    if (!isset($_SESSION['funcionarios'])) {
        $_SESSION['funcionarios'] = array();
    }

    array_push($_SESSION['funcionarios'], $funcionario);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Funcionário</title>
</head>

<body>
    <form action="inserirFuncionario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo"><br><br>

        <label for="salario">Salário:</label>
        <input type="number" id="salario" name="salario" step="0.01" min="0" required><br><br>

        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br><br>

        <button type="submit">Enviar</button>
    </form>

    <form action="inserirFuncionario.php" method="POST">
        <input type="submit" name="limparFuncionarios" value="Limpar Funcionarios">
    </form>


    <?php
    if (isset($_SESSION['funcionarios'])) {

        foreach ($_SESSION['funcionarios'] as $f) {
            $f->apresentacao();
            echo  "<br>";
        }
    }
    ?>

</body>

</html>