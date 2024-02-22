<?php
require 'Client.php';
$client = new Client('599.729.010-76');

// Inicializar as demais propriedades
$client->fullname = 'José Gustavo Duarte';
$client->phone = '(51) 99958-1358';
$client->status = true;


// Mostrar os dados
echo $client->cpf . "\n";
echo $client->fullname . "\n";
echo $client->phone . "\n";
echo ($client->status) ? 'Ativo' : 'Inativo' . "\n";

echo "\n";

echo $client;
