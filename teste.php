<?php
require_once "./Departamento.php";
require_once "./Funcionario.php";

$novo_funcionario1 = new Funcionario("Lucas", "Coordenador", 15890);
$novo_funcionario2 = new Funcionario("Maria", "Analista", 10589);
$novo_funcionario3 = new Funcionario("Gabriel", "Assistente", 4700);
$novo_funcionario4 = new Funcionario("Joel", "Assistente", 5200);

$novo_departamento= new Departamento();

$novo_departamento->adicionarFuncionario($novo_funcionario1);
$novo_departamento->adicionarFuncionario($novo_funcionario2);
$novo_departamento->adicionarFuncionario($novo_funcionario3);
$novo_departamento->adicionarFuncionario($novo_funcionario4);

echo "Nome do novo funcionário" . PHP_EOL;

$nome = fgets(STDIN);
$nome = trim($nome);

echo "Cargo" . PHP_EOL;

$cargo = fgets(STDIN);
$cargo = trim($cargo);

echo "Salário" . PHP_EOL;

$salario = fgets(STDIN);
$salario = (float)trim($salario);
$novo_funcionario5 = new Funcionario($nome, $cargo, $salario);
$novo_departamento->adicionarFuncionario($novo_funcionario5);
echo $novo_departamento->calcularFolhaTotal() . PHP_EOL;
echo $novo_departamento->mediaSalarial() . PHP_EOL;

