<?php

declare(strict_types=1);

require_once __DIR__ . '/../Operacaobase.php';

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