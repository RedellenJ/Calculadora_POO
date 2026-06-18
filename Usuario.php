<?php

declare(strict_types=1);

require_once __DIR__ . '/interface.php';
require_once __DIR__ . '/Operacaobase.php';
require_once __DIR__ . '/src/Historico.php';

use App\Calculadora\Historico;

interface FormatadorResultado
{
    public function formatar(float $valor): string;
}

class Usuario
{
    private Historico $historico;
    private ?OperacaoMatematica $operacao = null;

    public function __construct(
        private string $nome,
        private ?float $resultadoAtual = null
    ) {
        $this->historico = new Historico();
    }

    public function setOperacao(OperacaoMatematica $op): void
    {
        $this->operacao = $op;
    }

    public function registrarOperacao(
        OperacaoMatematica $op,
        float $a,
        float $b
    ): float {
        $res = $op->calcular($a, $b);
        $this->resultadoAtual = $res;

        $nome = $op->getNomeOperacao();

        $this->historico->adicionarRegistro(
            "{$nome}: {$a}, {$b} = {$res}"
        );

        return $res;
    }

    public function usarOperacaoAgregada(float $a, float $b): ?float
    {
        if ($this->operacao === null) {
            return null;
        }

        return $this->registrarOperacao($this->operacao, $a, $b);
    }

    public function verHistorico(): array
    {
        return $this->historico->obterRegistros();
    }

    public function exibirResultado(
        float $valor,
        FormatadorResultado $formatador
    ): string {
        return $formatador->formatar($valor);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getResultadoAtual(): ?float
    {
        return $this->resultadoAtual;
    }
}