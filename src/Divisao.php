<?php

declare(strict_types=1);

class Divisao extends OperacaoBase
{
    public function __construct()
    {
        parent::__construct('Divisão');
    }

    public function calcular(float $a, float $b): float
    {
        if ($b === 0.0) {
            echo 'Divisão por zero não é permitida.' . PHP_EOL;
            return 0.0;
        }

        return $a / $b;
    }
}