<?php

require_once "vendor/autoload.php";


use Developer\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('72275104');

print_r($resultado);
