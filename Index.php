<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Controllers\EpreuveController;
use App\Controllers\HomeController;
use App\Controllers\ParticipantController;
use App\Controllers\ProfilController;
use App\Controllers\ResultatsController;

use function FastRoute\simpleDispatcher;

require_once __DIR__.'/vendor/autoload.php';

$request = Request::createFromGlobals();

$dispatcher = simpleDispatcher(
    function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/home/{test}', [new HomeController(), 'home']);
        $r->addRoute('GET', '/participant', [new ParticipantController(), 'participant']);
        $r->addRoute('GET', '/epreuve', [new EpreuveController(), 'epreuve']);
        $r->addRoute('GET', '/profil', [new ProfilController(), 'profil']);
        $r->addRoute('GET', '/resultats', [new ResultatsController(), 'resultats']);
    }
);

// Fetch method and URI from somewhere
//$httpMethod = $_SERVER['REQUEST_METHOD'];
$httpMethod = $request->getMethod();
//$uri = $_SERVER['REQUEST_URI'];
$uri = $request->getPathInfo();

// Strip query string (?foo=bar) and decode URI
/*if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);*/

$response = new Response();

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo '404 : page pas trouvée';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo '405 : méthode pas trouvée';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        //$vars = $routeInfo[2];
        $request->query->add($routeInfo[2]);
        // ... call $handler with $vars
        call_user_func_array($handler, [$request]);
        break;
}
dump($request);
