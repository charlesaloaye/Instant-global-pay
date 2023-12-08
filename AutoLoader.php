<?php
spl_autoload_register('myAutoLader');
function myAutoLader($className)
{
    $path = 'classes/';
    $ext = '.class.php';
    $fullpath = $path . $className . $ext;
    if (!file_exists($fullpath)) {
        $path = 'models/';
        $ext = '.model.php';
        $fullpath = $path . $className . $ext;
    }
    include $fullpath;
};
