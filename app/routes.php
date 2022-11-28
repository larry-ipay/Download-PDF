<?php

use App\Controllers\PayinsController;
use App\Controllers\TransactionsController;
use App\Middleware\JsonBodyParserMiddleware;
use Slim\App;


return function (App $app) {
    //DO NOT REMOVE THIS ROUTE
    $app->options('/{routes:.+}', function ($request, $response) {
        return $response;
    });

    //YOUR ROUTES SHOULD GO BELLOW THIS COMMENT


    $app->group("/api/v1", function ($app){
    

        $app->group("/records", function ($app){
            $app->get("/transactions", [TransactionsController::class,'get_transactions']);
            $app->get("/inbox", [PayinsController::class, 'get_payins']);
        })->add(JsonBodyParserMiddleware::class);

    });
};
