<?php


$app->register(new \Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/../views',
]);

$app->register(new \Silex\Provider\AssetServiceProvider(), [
    'assets.version' => 'v1',
    'assets.named_packages' => [
        'css' => [
            'base_path' => '/css',
        ],
    ],
]);