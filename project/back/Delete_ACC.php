<?php
session_start();
include("DB_CON.php");
try
{
    $delete="DELETE FROM `Customers` WHERE Nat_id= ?";
    $stmt=$con->prepare($delete);
    $stmt->execute(array($_SESSION['Cust_Data']['Nat_id']));
}
catch(PDOException $e)
{
    echo "failed".$e->getMessage();//to trace errors if found
}
session_unset();
session_destroy();
header("Location:../Login/login.html");

?>