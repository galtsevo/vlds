<?php
use App\interfaces\SecretKeyInterface as Secret;

return function ($app)
{

    $app->add(new Tuupola\Middleware\JwtAuthentication([
        "ignore"=>["/auth/login","/auth/register"],
        "secret"=>"TedrrreriejfjfuTRTDGDEHYEYDHGE",
        "error"=>function ($response,$arguments)
        {
            $data["success"]= false;
            $data["response"]=$arguments["message"];
            $data["status_code"] = "401";

            return $response->withHeader("Content-type","application/json")
                ->getBody()->write(json_encode($data,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        }
    ]));


$app->add(Function ($request, $handler) {
        $response = $handler->handle($request);
         return $response->withHeader("Access-Control-Allow-Origin","*")
               ->withHeader("Access-Control-Allow-Headers","X-Requested-With,Content-Type,Accept,Origin,Authorization")
               ->withHeader("Access-Control-Allow-Methods","GET,POST,PUT,PATCH,OPTIONS,DELETE")
               ->withHeader("Access-Control-Allow-Credentials","true");
    });


};
