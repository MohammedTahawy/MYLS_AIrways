<?php
session_start();
include "DB_CON.php";
//only do this when the user come from login page
if($_SERVER['REQUEST_METHOD']=='POST'){
$Nat_id=$_POST['Nat_id'];
$password=$_POST['password'];

//check the user in db
try{
$login=("SELECT *
 FROM Customers 
 WHERE
 Nat_id=? AND Password=?");
 $stmt=$con->prepare($login);
$stmt->execute(array($Nat_id,$password));
$cust_data=$stmt->fetch(PDO::FETCH_ASSOC);
if($cust_data['Nat_id']==$Nat_id && $cust_data['Password']==$password){
$_SESSION['Cust_Data']=$cust_data;
echo"login successful";
include('./back/manage.php');
header("location:../indexwithlogout.php");
}else{
    echo "Wrong password or id";
}
} 
catch(PDOException $ERROR){
    echo $ERROR;
}
}

?>

