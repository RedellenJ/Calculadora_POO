<?php

declare(strict_types = 1);

require_once 'Historico.php';
require_once 'Operacaobase.php';

class Usuario {
    public function __construct(
        private string $nome,
        private Historico $historico,
        private ?float $resultadoAtual = null
    ) {}

    public function registrarOperacao(string $operacao): void {
        $this->historico->adicionar($operacao);
    }

    public function verHistorico(): array {
        return $this->historico->listar();
    }

    public function exibirResultado(float $valor, FormatadorResultado $formatador): string {
    return $formatador->formatar($valor);
}

}