<?php

declare(strict_types=1);

class Soma extends OperacaoBase
{
    public function __construct()
    {
        parent::__construct('Soma');
    }

    public function calcular(float $a, float $b): float
    {
        return $a + $b;
    }
}