<?php

declare(strict_types=1);

class Users
{
    public string $name;
    public int $age;

    // Primeiro se passa os paramêtros obrigátorios e depois os opcionais
    public function __construct(string $name, int $age = 20)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo 'Chamando o método destrutor...';
    }
}

