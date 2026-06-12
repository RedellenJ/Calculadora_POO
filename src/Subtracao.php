<?php

declare(strict_types=1);

class Subtracao extends OperacaoBase
{
    public function __construct()
    {
        parent::__construct('Subtração');
    }

    public function calcular(float $a, float $b): float
    {
        return $a - $b;
    }
}