<?php
/**
 * Dashboard of Doom
 *
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/src/views',
    'twig.templates' => ['bootstrap_3_layout.html.twig']
]);

$app->get('/', function(){
    return 'Home!';
});

$app->run();