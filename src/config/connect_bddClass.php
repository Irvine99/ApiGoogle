<?php
class Connect_bdd
{
    public $bdd;

    public function __construct(){
        $user = "root";
        $pass = "";
        $host = "127.0.0.1";
        $port = '3306';
        $db = "apigo";
        $this->bdd = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}
?>