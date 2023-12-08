<?php

if (array_key_exists($uri, $routes)) {
    $middleware = $routes[$uri]['middleware'] ;
    if ($middleware == 'auth') {
        if (!isset($_SESSION['loggedin'])) {
            header("location:/login");
        }
    }

    if ($middleware == 'noauth') {
        if (isset($_SESSION['loggedin'])) {
            header("location:/dashboard");
     
    }


    }
}
