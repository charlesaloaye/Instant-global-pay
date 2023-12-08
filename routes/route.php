<?php
$uri = $_SERVER['REQUEST_URI'];
$fulluri = parse_url($uri);
$uri = $fulluri['path'];

$routes = [
    '/' =>   [
        'path'    => views('index'), 'title'     => 'Homepage'
    ],

    '/login' => [
        'path'    => views('auth.login'), 'title'     => 'Login'

    ],

    '/register' => [
        'path' => views('auth.register'), 'title'     => 'Register'
    ],

    '/pin' => [
        'path' => views('auth.pin'), 'title'     => 'Pin'
    ],

    '/dashboard' => [
        'path' => views('dashboard'), 'title'     => 'Dashboard'
    ],

    '/verify' => [
        'path' => views('auth.verify'), 'title'     => 'Verify'
    ],
    '/logout' => [
        'path' => views('auth.logout'),
        'title'     => 'Logout'
    ]
];

include 'routeController.php';


if (array_key_exists($uri, $routes)) {
    $_SESSION['title'] = $routes[$uri]['title'];
    include $routes[$uri]['path'];
} else {
    $_SESSION['title'] = '404 Page Not Found';
    require 'views/404.php';
}
