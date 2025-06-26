<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App();

// Sample route
$app->get('/hello/{name}', function ($request, $response, array $args ) {
    $name = $request->getAttribute('name');
    $response->getBody()->write('Hello, ' . $name);
    return $response;
});

$app->run();
