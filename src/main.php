<?php
require 'vendor/autoload.php';

use example\HelloWorldClient;
use example\HelloRequest;

// URL do servidor Twirp
$serverUrl = 'http://localhost:8080';

// Inicialize o cliente Twirp para o serviço HelloWorld
$client = new HelloWorldClient($serverUrl);

// Crie uma solicitação para o método Hello
$request = new HelloRequest();
$request->setName('Alice'); // Defina os parâmetros necessários para o método Hello

// Chame o método Hello do serviço Twirp
try {
    $response = $client->Hello($request);

    // Manipule a resposta recebida
    echo "Mensagem do servidor: " . $response->getMessage() . PHP_EOL;
} catch (\Twitch\Twirp\Error $e) {
    // Lidar com erros Twirp
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}
