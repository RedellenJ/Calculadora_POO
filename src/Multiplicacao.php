<?php

declare(strict_types=1);

require_once __DIR__ . '/../Operacaobase.php';

class Multiplicacao extends OperacaoBase
{
    public function __construct()
    {
        parent::__construct('Multiplicação');
    }

    public function calcular(float $a, float $b): float
    {
        return $a * $b;
    }
}