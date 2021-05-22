<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

/*
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 */

/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    /*
     * Here, we are connecting '/' (base path) to a controller called 'Site',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, templates/Site/home.php)...
     */
    $builder->connect('/', ['controller' => 'site', 'action' => 'home']);
    $builder->connect('/servicos', ['controller' => 'site', 'action' => 'servicos']);
    $builder->connect('/empresa', ['controller' => 'site', 'action' => 'empresa']);
    $builder->connect('/noticias', ['controller' => 'site', 'action' => 'noticias']);
    $builder->connect('/eventos', ['controller' => 'site', 'action' => 'eventos']);
    $builder->connect('/links-uteis', ['controller' => 'site', 'action' => 'links_uteis']);
    $builder->connect('/cursos', ['controller' => 'site', 'action' => 'cursos']);
    $builder->connect('/cadastro', ['controller' => 'site', 'action' => 'cadastro']);
    $builder->connect('/classificados', ['controller' => 'site', 'action' => 'classificados']);
    $builder->connect('/contato', ['controller' => 'site', 'action' => 'contato']);
    $builder->connect('/mail', ['controller' => 'site', 'action' => 'mail']);
    $builder->connect('/login', ['controller' => 'site', 'action' => 'login']);
    $builder->connect('/logout', ['controller' => 'site', 'action' => 'logout']);
    $builder->connect('/cotacoes', ['controller' => 'site', 'action' => 'cotacoes']);

    /*
     * ...and connect the rest of 'Site' controller's URLs.
     */
    // $builder->connect('/site/*', ['controller' => 'site', 'action' => 'genericPage']);

    /*
     * Connect catchall routes for all controllers.
     *
     * The `fallbacks` method is a shortcut for
     *
     * ```
     * $builder->connect('/:controller', ['action' => 'index']);
     * $builder->connect('/:controller/:action/*', []);
     * ```
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $builder->fallbacks();
});

/*
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * $routes->scope('/api', function (RouteBuilder $builder) {
 *     // No $builder->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
