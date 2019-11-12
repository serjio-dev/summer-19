<?php
require_once 'vendor/autoload.php';



$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/users', [\App\Handler\Users::class, 'getList']);
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/users/creat', [\App\Handler\Users::class, 'show']);
    $r->addRoute('GET', '/users/delete/{id:\d+}', [\App\Handler\Users::class, 'delete']);
    $r->addRoute('GET', '/users/update/{id:\d+}', [\App\Handler\Users::class, 'show']);
    $r->addRoute('POST', '/users/save/{id:\d+}', [\App\Handler\Users::class, 'save']);
    $r->addRoute('POST', '/users/save', [\App\Handler\Users::class, 'save']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

if ($routeInfo[0] === 1) {
    //var_dump($routeInfo);
    list($class, $method) = $routeInfo[1];

    if (class_exists($class)) {
        $obj = new $class();
        if (method_exists($obj, $method)) {
            $obj->$method($routeInfo[2]);
        }
    }

} else {
    echo 'Обработчик не найден!';
}
