<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http;
use Slim\Factory\AppFactory;
//use Slim\App;

http_response_code(500);

require __DIR__ . '/../vendor/autoload.php';

$settings = require_once  __DIR__ ."/../config/settings.php";

//$app = new App($settings);
$app = AppFactory::create();

$container = $app->getContainer();

require_once __DIR__. '/../config/errHandler.php';

$routeContainers = require_once __DIR__. '/../config/routecontainers.php';

$routeContainers($container);


require_once __DIR__. '/../config/routes.php';

require_once __DIR__."/../config/database.php";

$middleware = require_once __DIR__."/../config/middleware.php";

$middleware($app);

$app->run();
