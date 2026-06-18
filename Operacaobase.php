<?php

declare(strict_types=1);

require_once __DIR__ . '/../interface.php';

abstract class OperacaoBase implements OperacaoMatematica
{
    protected string $nomeOperacao;

    public function __construct(string $nomeOperacaoMatematica)
    {
        $this->nomeOperacao = $nomeOperacaoMatematica;
    }

    public function getNomeOperacaoMatematica(): string
    {
        return $this->nomeOperacao;
    }

    abstract public function calcular(float $a, float $b): float;
}