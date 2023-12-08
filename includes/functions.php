<?php
$error=[];
function showValue($PostArrayKey)
{
    $value  = $_POST[$PostArrayKey];
    echo  $value;
}

function setError(string $key = null, string $value = null)
{
    global $error;
    if (isset($value)) {
        $error[$key] = $value;
        return $error;
    }
}
function getError($arraykey)
{
    global $error;
    if (isset($error[$arraykey])) {
        return $error[$arraykey];
    }
}
function getAllErrors()
{
    global $error;
    return $error;
}

function assets(string $filepath){
$fullpath = APP_URL.'assets/'.$filepath;

echo $fullpath;
}

function includes(string $filepath){
$fullpath = 'includes/'.$filepath.'.php';

include $fullpath;
}


function selectAll(string $table = 'tbl_users',string $condition = null, string $column = 'email', $value = null){
    if($condition != null ){
        $query = "SELECT * FROM $table $condition $column = '$value'";
        $db = new database;
        $db = $db->db();
        $result = $db->query($query);
        $user = $result->fetch(PDO::FETCH_OBJ);
        return $user;

    }else{
        $query = "SELECT * FROM $table";
        $db = new database;
        $db = $db->db();
        $result = $db->query($query);
        $user = $result->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }
}
function dd($data)
{
    echo  "<pre style='background-color:black; color:green; font-weight:bolder'>";
    var_dump($data);
    echo  "<pre>";
    die();
}
function views($filepath){
    $filepath = str_replace('.','/', $filepath);
    return 'views/'.$filepath.'.php';

}

function session($key){
    if(isset($_SESSION[$key])){
        echo $_SESSION[$key].'  '.APP_TITLE;
    }
}