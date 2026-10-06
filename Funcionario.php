<?php

class Funcionario
{
    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {

        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function getSalario(): float
    {
        return $this->salario;
    }
    public function setSalario(float $valor): void
    {

        if ($valor > 0) {
            $this->salario = $valor;
        }
    }
    public function setCargo(string $novoCargo): void
    {

        if ($novoCargo == "Analista") {

            $this->cargo = $novoCargo;
        } elseif ($novoCargo == "Assistente") {
            $this->cargo = $novoCargo;
        } elseif ($novoCargo == "Coordenador") {

            $this->cargo = $novoCargo;
        }
    }
    public function calcularSalarioLiquido(): float
    {
        if ($this->salario > 5000) {

            return $this->salario - ($this->salario * 16 / 100);
        } else {

            return $this->salario -($this->salario*11/ 100);
        }
    }
    public function ehElegivelParaBonus(): bool
    {
        if ($this->cargo == "Coordenador" && $this->calcularSalarioLiquido() > 4000) {
            return true;
        } else {
            return false;
        }
    }
}
