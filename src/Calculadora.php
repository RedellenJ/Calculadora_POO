<?php
declare(strict_types=1);

namespace App\Calculadora;

require_once __DIR__ . '/Historico.php';
require_once __DIR__ . '/../interface.php';

class Calculadora
{
    private Historico $historico;

    public function __construct()
    {
        $this->historico = new Historico();
    }

    public function calcular(\OperacaoMatematica $operacao, float $valor1, float $valor2): float
    {
        $resultado = $operacao->calcular($valor1, $valor2);

        $nomeOperacao = $operacao->getNomeOperacao();
        
        $this->historico->adicionarRegistro("{$nomeOperacao}: {$valor1} e {$valor2} = {$resultado}");

        return $resultado;
    }

    public function exibirHistorico(): array
    {
        return $this->historico->obterRegistros();
    }
}