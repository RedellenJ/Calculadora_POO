<?php
declare(strict_types=1);

namespace App\Calculadora;

class Historico 
{
    private array $registros = [];

    public function adicionarRegistro(string $registro): void 
    {
        $this->registros[] = $registro;
    }

    public function obterRegistros(): array 
    {
        return $this->registros;
    }
}