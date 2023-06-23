<?php
include('DB_CON.php');
if ($_SERVER['REQUEST_METHOD']=="POST") {
//taken data from user 
    $nat = $_POST['nat'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $password = $_POST['password']; 
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $country = $_POST['country']; 
try{
$reg="INSERT INTO Customers (Nat_id,password,F_name,L_name,Phone,Country,email)
VALUES (?,?,?,?,?,?,?) ";
$stmt=$con->prepare($reg);
$stmt->execute(array($nat,$password,$fname,$lname,$phone,$country,$email));
header("Location:../Login/login.html");
}
catch(PDOException $e){
echo $e;
}


}
?>
