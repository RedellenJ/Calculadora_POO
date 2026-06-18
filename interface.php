<?php

declare(strict_types=1);

interface OperacaoMatematica
{
    public function calcular(float $a, float $b): float;

    public function getNomeOperacaoMatematica(): string;
}