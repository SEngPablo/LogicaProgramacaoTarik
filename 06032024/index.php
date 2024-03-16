<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Minha Calculadora</h1>    
    <form action="index.php" method="post">

        <label>Primeiro número</label>
        <input type="text" id="numero1" name="num1" placeholder="Digite o primeiro número"><br>

        <label>Segundo número</label>
        <input type="text" id="numero2" name="num2" placeholder="Digite o segundo número"><br>

        <label>Escolha uma operação</label>
        <input type="radio" id="op" value="+" name="op">+
        <input type="radio" id="op" value="-" name="op">-
        <input type="radio" id="op" value="*" name="op">*
        <input type="radio" id="op" value="/" name="op">/
        <!-- <select name="op" id="">
           // <?php 
          //      $operacoes = array('+' => 'Adição', '-' => 'Subtração', '*' => 'Multiplicação', '/' => 'Divisão')
           //     foreach ($operacoes as $key => $value) {
           //         echo "<option value="$key">$value </option>"
          //      }
         //   ?> -->

        </select>
        <br>
        <input type="submit" name="calcular" value="Calcular">

        <h1>Resultado</h1>
    

    </form>
</body>
</html>

<?php 
if(isset($_POST['calcular'])){
    if(empty($_POST['num1'])){
        echo "ERRO: Digite o primeiro número<br>";
    }
    if(empty($_POST['num2'])){
        echo "ERRO: Digite o segundo número<br>";
    }else{

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$op = $_POST['op'];


if ($op == "+") {
    $resultado = $num1 + $num2;
    echo "A soma da operação é: ".$resultado.".";
}
elseif ($op == "-") {
    $resultado = $num1 - $num2;
    echo "A subtração da operação é: ".$resultado.".";
}elseif ($op == "*"){
    $resultado = ($num1 * $num2);
    echo "A multiplicação da operação é: ".$resultado.".";
}elseif ($op == "/") {
    if ($num1 == 0 || $num2 == 0){
        echo "Não é possível dividir por 0.";
    }else{
    $resultado = ($num1 / $num2);
    echo "A divisão da operação é: ".$resultado.".";
}
}
}
}

?>