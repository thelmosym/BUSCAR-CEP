<?php

require_once "vendor/autoload.php";

use Wead\BuscarCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('21020130');

print_r($resultado);