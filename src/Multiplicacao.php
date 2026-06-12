<?php

declare(strict_types=1);

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