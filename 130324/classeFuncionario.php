<?php
// id, nome, salario, cargo

class Funcionario
{
    public $id;
    public $nome;
    public $salario;
    public $cargo;

    public function __construct($id, $nome, $salario, $cargo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function apresentacao()
    {
        echo "<h1> {$this->nome} </h1>";
        echo "<p> ID: {$this->id}</p>";
        echo "<p> Cargo: {$this->cargo} </p>";
        echo "<p> Salário: R$ {$this->salario} </p>";
    }

    public function aumentoSalario(){
        $this->salario = $this->salario * 1.1;
    }
}


?>