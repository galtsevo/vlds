<?php

declare(strict_types=1);

namespace App\Http\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class HomeAction
{
    public function __invoke(Request $request, response $response, $args): response
    {
        $response->getBody()->write('{}');
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function signup(Request $request, response $response, $args): response
    {
        $response->getBody()->write('{}');
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function auth(Request $request, response $response, $args): response
    {
        $response->getBody()->write('{}');
        return $response->withHeader('Content-Type', 'application/json');
    }
}
