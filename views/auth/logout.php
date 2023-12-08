<?php
session_unset();
session_destroy();
session_start();
$_SESSION['logout'] = 'successs';
header("location:/login")

?>