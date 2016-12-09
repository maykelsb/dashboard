<?php
/**
 * Dashboard of Doom
 *
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/views'
]);

$app->get('/', function(){
    return 'Home!';
});

$app->run();