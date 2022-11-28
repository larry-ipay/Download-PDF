<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Routing\RouteContext;

class CorsMiddleware
{
    protected $allowed_domain = [
        'http://example:3000'  => ['OPTIONS', 'GET', 'POST', 'DELETE','PATCH'],
        'http://127.0.0.1:3000' => ['OPTIONS', 'GET', 'POST', 'DELETE','PATCH'],
        'http://localhost:3000' => ['OPTIONS', 'GET', 'POST', 'DELETE','PATCH'],
        'http://localhost:3001' => ['OPTIONS', 'GET', 'POST', 'DELETE','PATCH'],
        'https://admin-dashboard-5is0xlotz-amani-joe.vercel.app'=>['OPTIONS', 'GET', 'POST', 'DELETE', 'PATCH'],
        // '*' => ['OPTIONS', 'GET', 'POST', 'DELETE', 'PATCH']
    ];

    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        $routeContext = RouteContext::fromRequest($request);
        $routingResults = $routeContext->getRoutingResults();
        $methods = $routingResults->getAllowedMethods();
        $requestHeaders = $request->getHeaderLine('Access-Control-Request-Headers');

        $response = $handler->handle($request);
        $origin = $request->getHeaderLine('Origin');

        if (!in_array($origin, array_keys($this->allowed_domain))){
            return $response;
        }

        $response = $response->withHeader('Access-Control-Allow-Origin', $origin );
        $response = $response->withHeader('Access-Control-Allow-Methods', implode(',', $methods));
        $response = $response->withHeader('Access-Control-Allow-Headers', $requestHeaders);

        // Optional: Allow Ajax CORS requests with Authorization header
        $response = $response->withHeader('Access-Control-Allow-Credentials', 'true');

        return $response;
    }

}