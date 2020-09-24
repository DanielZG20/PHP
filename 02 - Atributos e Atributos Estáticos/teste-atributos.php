<?php

require 'Users.php';

$users = new Users();

//Atributos estáticos
Users::$name = 'Daniel';
Users::$age = '20';

//Atributos convencionais
$users->dateOfBirth = new \DateTime('2000-12-20');
$users->weight = 90;
$users->children = ['Juliana', 'Miguel'];

echo 'Name: ' . Users::$name . PHP_EOL .
     'Age: ' . Users::$age . PHP_EOL .
     'Date of Birthday: ' . $users->dateOfBirth->format('d/m/Y') . PHP_EOL .
     'Weight: ' . $users->weight . PHP_EOL .
     'Childen: ' . count($users->children);