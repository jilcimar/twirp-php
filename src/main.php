<?php
require 'vendor/autoload.php';

// URL do servidor Go
$serverUrl = 'http://localhost:9000/';

// Crie uma instância do cliente Twirp
$client = new \GPBMetadata\Proto\Hello($serverUrl);

// Crie uma instância da mensagem HelloRequest e defina o nome
$request = new HelloRequest();
$request->setName('jilcimar');

try {
    // Faça a chamada para o servidor Go usando o método SayHello
    $response = $client->SayHello($request);

    // Se a chamada for bem-sucedida, imprima a resposta
    if ($response instanceof HelloResponse) {
        echo "Resposta do servidor: " . $response->getMessage() . "\n";
    } else {
        echo "Resposta inválida do servidor\n";
    }
} catch (\Exception $e) {
    // Trate quaisquer exceções que possam ocorrer durante a chamada
    echo "Erro ao chamar o servidor: " . $e->getMessage() . "\n";
}
