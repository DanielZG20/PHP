<?php

declare(strict_types=1);

class Veiculo
{
    //Atributos (Características)
    public string $name;
    public string $type;
    public string $model;

    //Comportamento (Métodos)
    public function ligar(): void
    {
        echo 'Ligando o ' . $this->type . PHP_EOL;
    }

    public function desligar(): void
    {
        echo 'Desligando o ' . $this->type . PHP_EOL;
    }

    public function acelerar(): void
    {
        echo 'Acelerando o ' . $this->type . PHP_EOL;
    }

    public function obtemNome(): void
    {
        echo 'Nome do veículo: ' . $this->name . PHP_EOL;
    }

    public function obtemMarca(): void
    {
        echo 'Marca do veículo: ' . $this->model;
    }
}