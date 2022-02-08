<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http;
use Slim\Factory\AppFactory;

http_response_code(500);

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

$app->get('/', Http\Action\HomeAction::class);

$app->get('/auth/signup', Http\Action\HomeAction::class.':signup');

$app->get('/oauth/auth', Http\Action\HomeAction::class.':auth');


$app->run();
