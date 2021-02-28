<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder; // needed for scopes

$routes->setRouteClass(DashedRoute::class);

$routes->connect('/{id}', ['controller' => 'Tests', 'action' => 'show'], ['pass' =>  ['id']]); // simple route with argument (this will produce localhost/id)

$routes->scope('/blog', ['plugin' => 'Blog'], function (RouteBuilder $routes){ // routes in scope has the same base (this one will have /blog... localhost/blog)
   $routes->connect('/', ['controller' => 'Articles', 'action' => 'index']); // this will produce localhost/blog/s
   $routes->connect('/{article}', ['controller' => 'Articles', 'action' => 'article'], ['pass' => ['article']]); // this will produce localhost/blog/article-name

});

?>