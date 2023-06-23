<?php
$dsn="mysql:host=localhost;dbname=MYLS";
$username="root";
$pass="";
$option = array (
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);
try{
$con=new PDO($dsn,$username,$pass,$option);
$con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ERR){
echo "Failed to connect". $ERR->getMessage(); 
}
?>