<?php  
Class database{
protected  string $dbname = 'instantpay';
protected string $dbuser = 'root';
protected string $dbhost = 'locadlhost';
protected string $dbpass = '';


private function connect():pdo{
$dsn = "mysql:host=localhost;dbname=".$this->dbname;
$db = new PDO($dsn, $this->dbuser, $this->dbpass);
if($db){
return $db;
}
else{
    echo 'failed to connect';
}
}

public function db(){
    return $this->connect();
}

}

?>
