<?php
require_once "./Funcionario.php";

class Departamento
{
    private array $funcionarios = [];


    public function adicionarFuncionario(Funcionario $f): void
    {
        array_push($this->funcionarios, $f);
    }

    public function calcularFolhaTotal(): float
    {
        $contador = 0;
        foreach ($this->funcionarios as $Funcionario) {
            $contador += $Funcionario->calcularSalarioLiquido();
        }
        return $contador;
    }

    public function funcionariosPorCargo(string $cargo): array
    {
        $filtrador = [];
        foreach ($this->funcionarios as $f ) {
            if ($f->getCargo() == $cargo) {
                array_push($filtrador, $f);
            }
        }
        return $filtrador;
    }

    public function  mediaSalarial(): float
    {
        $media = 0;
        $contador = 0;
        if(count($this->funcionarios) == 0){
            return 0;
        }
        foreach ($this->funcionarios as $valor) {
            $valor = $valor->calcularSalarioLiquido();
            $media += $valor;
            $contador++;
        }
        return $media / $contador;
    }
}
