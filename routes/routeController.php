<?php
if (isset($_SESSION['loggedin']) && $uri != '/dashboard') {
    header("location:/dashboard");
}

if (!isset($_SESSION['loggedin']) && $uri == '/dashboard') {
    header("location:/login");
}

?>
