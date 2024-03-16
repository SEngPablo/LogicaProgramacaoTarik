<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Texto inicial</h1>    

<?php 

$nome = "Pablo";
$sobrenome = "Henrique";
$anoatual = 2024;
$anonasc = 1998;
$idade = $anoatual - $anonasc;
echo "<h2>Me chamo <b>$nome $sobrenome</b>, tenho <b>$idade</b> anos.</h2>";

if ($idade < 25) {
    echo "Você tem menos de 25 anos";
}
elseif ($idade >25) {
    echo "Você tem mais de 25 anos";
}
else 
    echo "<br> Você tem 25 anos";

?>

<form action="index.php" method="post">
    <label for="operacao">Operação</label>
    <input type="text" id="operacao" name="operacao">
    <input type="submit" value="Enviar">
</form>

<?php 
$n1 = 20;
$n2 = 10;
$operacao = $_POST["operacao"];

//  $soma =  $n1+$n2;
// $subtracao = $n1-$n2;
// $multiplicacao = $n1*$n2;
// $divisao = $n1/$n2;

if ($operacao == "+") {
    $soma = $n1 + $n2;
    echo "A soma dos números é: $soma";
}
elseif ($operacao == "-"){
    $subtracao = $n1 - $n2;
    echo "A subtração dos números é: $subtracao";
}
elseif ($operacao == "*") {
    $multiplicacao = $n1 * $n2;
    echo "A multiplicação dos números é: $multiplicacao";
}
elseif ($operacao == "/") {
    $divisao = $n1 / $n2;
    echo "A divisão dos números é: $divisao";
}
else {
    echo "Operação inválida.";
}

// echo "<h1><br>$n1 $operacao $n2 = $soma<br></h1>";
// echo "<h2>O resultado das operações são:<br>Soma: $soma<br>Subtração: $subtracao<br>Multiplicação: $multiplicacao<br>Divisão: $divisao</h2>";




switch ($operacao) {
    case '+':
        $soma = $n1 + $n2;
        echo "<br>Resultado soma pelo switch case:". $soma;
        break;
    case '-':
        $subtracao = $n1 - $n2;
        echo "<br>Resultado subtração pelo switch case:". $subtracao;
        break;
    case '*':
        $multiplicacao = $n1 * $n2;
        echo "<br>Resultado multiplicação pelo switch case:". $multiplicacao;
        break;
    case '/':
        $divisao = $n1 / $n2;
        echo "<br>Resultado divisão pelo switch case:". $divisao;
        break;
        
    default:
echo "Insira uma opção válida!";
        break;
}

?>
</body>
</html>


