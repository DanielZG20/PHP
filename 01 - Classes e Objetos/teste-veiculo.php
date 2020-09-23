<?php

// Chamando a nossa classe para esta página
require "Veiculo.php";

// Criando um objeto da classe Veiculo
// Criando a 'instância' da classe utilizando o new
$veiculoCarro = new Veiculo();

//Atribuindo valores a nossa classe
$veiculoCarro->type = 'Carro';
$veiculoCarro->model = 'Chevrolet';
$veiculoCarro->name = 'Camaro';

//Mostrando no console os valores da classe
echo $veiculoCarro->type . PHP_EOL;
echo $veiculoCarro->model . PHP_EOL;
echo $veiculoCarro->name . PHP_EOL;

//Chamando os métodos da classe
$veiculoCarro->ligar();
$veiculoCarro->acelerar();
$veiculoCarro->desligar();
$veiculoCarro->obtemNome();
$veiculoCarro->obtemMarca();
