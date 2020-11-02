<?php

use App\controllers\CategorieController;
use App\controllers\CreationCategorieController;
use App\controllers\CreationParticipantController;
use App\controllers\CreationProfilController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \App\controllers\EpreuveController;
use \App\controllers\HomeController;
use \App\controllers\ParticipantController;
use \App\controllers\ProfilController;
use \App\controllers\ResultatsController;
use \App\controllers\CreationEpreuveController;

use function FastRoute\simpleDispatcher;

require_once __DIR__.'/vendor/autoload.php';

$request = Request::createFromGlobals();

$dispatcher = simpleDispatcher(
    function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/home', [new HomeController(), 'TwigTest']);
        $r->addRoute('GET', '/participant', [new ParticipantController(), 'TwigTest']);
        $r->addRoute('GET', '/epreuve', [new EpreuveController(), 'TwigTest']);
        $r->addRoute('GET', '/profil', [new ProfilController(), 'TwigTest']);
        $r->addRoute('GET', '/resultats', [new ResultatsController(), 'TwigTest']);
        $r->addRoute('GET', '/categorie', [new CategorieController(), 'TwigTest']);
        $r->addRoute('GET','/creation-epreuve', [new CreationEpreuveController(), 'TwigTest']);
        $r->addRoute('GET','/creation-categorie', [new CreationCategorieController(), 'TwigTest']);
        $r->addRoute('GET','/creation-profil', [new CreationProfilController(), 'TwigTest']);
        $r->addRoute('GET','/creation-participant', [new CreationParticipantController(), 'TwigTest']);
        $r->addRoute('POST','/creation-participant', [new CreationParticipantController(), 'CreationParticipant']);
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

