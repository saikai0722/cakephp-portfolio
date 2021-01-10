<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    $routes->applyMiddleware('csrf');

    //Home
    $routes->connect('/', ['controller' => 'home', 'action' => 'index']);
    //About
    //Works
    $routes->connect('works/', ['controller' => 'works', 'action' => 'index']);
    $routes->connect('works/banner', ['controller' => 'works', 'action' => 'banner']);
    //Blog
    $routes->connect('blog/', ['controller' => 'blog', 'action' => 'index']);
    $routes->connect('blog/a01', ['controller' => 'blog', 'action' => 'a01']);
    $routes->connect('blog/a02', ['controller' => 'blog', 'action' => 'a02']);
    //Likes

    $routes->fallbacks(DashedRoute::class);
});

