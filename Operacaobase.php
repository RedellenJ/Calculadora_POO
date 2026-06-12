<?php

abstract class OperacaoBase implements OperacaoMatematica
{
    protected string $nomeOperacao;

    public function __construct(string $nomeOperacao)
    {
        $this->nomeOperacao = $nomeOperacao;
    }

    public function getNomeOperacao(): string
    {
        return $this->nomeOperacao;
    }

    abstract public function calcular(float $a, float $b): float;
}