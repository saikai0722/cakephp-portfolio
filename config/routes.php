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
    $routes->connect('about/', ['controller' => 'about', 'action' => 'index']);
    //Works
    $routes->connect('works/',                   ['controller' => 'works', 'action' => 'index']);
    $routes->connect('works/banner/',            ['controller' => 'works', 'action' => 'banner']);
    $routes->connect('works/shinwa/',            ['controller' => 'works', 'action' => 'shinwa']);
    $routes->connect('works/shinwa/shinjuku/',   ['controller' => 'works', 'action' => 'shinwaShinjuku']);
    $routes->connect('works/shinwa/doctor/',     ['controller' => 'works', 'action' => 'shinwaDoctor']);
    $routes->connect('works/shinwa/lp/',         ['controller' => 'works', 'action' => 'shinwaLp']);
    $routes->connect('works/sunao/',             ['controller' => 'works', 'action' => 'sunao']);
    $routes->connect('works/rosemary/',          ['controller' => 'works', 'action' => 'rosemary']);
    $routes->connect('works/femmy/shibuya/',     ['controller' => 'works', 'action' => 'femmyShibuya']);
    $routes->connect('works/femmy/ginza/',       ['controller' => 'works', 'action' => 'femmyGinza']);
    $routes->connect('works/femmy/ikebukuro/',   ['controller' => 'works', 'action' => 'femmyIkebukuro']);
    $routes->connect('works/femmy/umeda/',       ['controller' => 'works', 'action' => 'femmyUmeda']);
    $routes->connect('works/femmy/agora/',       ['controller' => 'works', 'action' => 'femmyAgora']);
    $routes->connect('works/harg/',              ['controller' => 'works', 'action' => 'harg']);
    $routes->connect('works/ukedental/',         ['controller' => 'works', 'action' => 'ukedental']);
    $routes->connect('works/whitedentalyono/',   ['controller' => 'works', 'action' => 'whitedentalyono']);
    $routes->connect('works/kabedent/',          ['controller' => 'works', 'action' => 'kabedent']);
    $routes->connect('works/maria/machida/',     ['controller' => 'works', 'action' => 'mariaMachida']);
    $routes->connect('works/maria/omiya/',       ['controller' => 'works', 'action' => 'mariaOmiya']);
    $routes->connect('works/maria/naha/',        ['controller' => 'works', 'action' => 'mariaNaha']);
    $routes->connect('works/maria/shinjuku/',    ['controller' => 'works', 'action' => 'mariaShinjuku']);
    $routes->connect('works/maria/yokohama/',    ['controller' => 'works', 'action' => 'mariaYokohama']);
    $routes->connect('works/aichimaria/',        ['controller' => 'works', 'action' => 'aichimaria']);
    $routes->connect('works/mary/',              ['controller' => 'works', 'action' => 'mary']);
    $routes->connect('works/ginzahada/',         ['controller' => 'works', 'action' => 'ginzahada']);
    $routes->connect('works/ginzahada/dastumo',  ['controller' => 'works', 'action' => 'ginzahadaDastumo']);
    $routes->connect('works/heartlife/',         ['controller' => 'works', 'action' => 'heartlife']);
    $routes->connect('works/yagoishi/',          ['controller' => 'works', 'action' => 'yagoishi']);
    $routes->connect('works/miyamasu/',          ['controller' => 'works', 'action' => 'miyamasu']);
    $routes->connect('works/laketown/',          ['controller' => 'works', 'action' => 'laketown']);
    $routes->connect('works/ayabe/',             ['controller' => 'works', 'action' => 'ayabe']);
    $routes->connect('works/jdac/',              ['controller' => 'works', 'action' => 'jdac']);




    


    $routes->fallbacks(DashedRoute::class);
});

