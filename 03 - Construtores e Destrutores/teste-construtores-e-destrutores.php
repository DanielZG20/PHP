<?php

require 'Users.php';

$users = new Users('Daniel Zanoni');

echo 'Name: ' . $users->name . PHP_EOL .
     'Age: ' . $users->age . PHP_EOL;