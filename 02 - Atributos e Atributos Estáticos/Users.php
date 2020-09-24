<?php

declare(strict_types=1);

class Users
{
    //Atributos estáticos só podem ser acessados através da classe
    public static string $name;
    public static int $age;

    //Atributos convencionais só podem ser acessados através de uma instância da classe
    public int $weight;
    public \DateTime $dateOfBirth;
    public array $children = [];
}
