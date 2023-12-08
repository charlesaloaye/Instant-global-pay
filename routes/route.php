<?php
$uri = $_SERVER['REQUEST_URI'];
$fulluri = parse_url($uri);
$uri = $fulluri['path'];

$routes = [
    '/' =>   [
        'path'    => views('index'),
        'title'     => 'Homepage',
        'middleware'    => 'noauth'

    ],

    '/login' => [
        'path'    => views('auth.login'),
        'title'     => 'Login',
        'middleware'    => 'noauth'

    ],

    '/register' => [
        'path' => views('auth.register'),
        'title'     => 'Register',
        'middleware'    => 'noauth'

    ],

    '/profile' => [
        'path'          => views('profile'),
        'title'         => 'Profile',
        'middleware'    => 'auth'
    ],

    '/pin' => [
        'path' => views('auth.pin'),
        'title'   => 'Pin',
        'middleware'    => 'noauth'

    ],

    '/dashboard' => [
        'path' => views('dashboard'),
        'title'     => 'Dashboard',
        'middleware' => 'auth'
    ],

    '/verify' => [
        'path' => views('auth.verify'),
        'title'     => 'Verify',
        'middleware'    => 'noauth'

    ],
    '/logout' => [
        'path' => views('auth.logout'),
        'title'     => 'Logout',
        'middleware'    => 'auth'

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
