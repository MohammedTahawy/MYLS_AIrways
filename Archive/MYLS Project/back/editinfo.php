<?php
session_start();//start the session to transfer data among pages

//assigning data user entered to the session array
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if($_POST['F_name']!=""){
    $_SESSION['Cust_Data']['F_name']=$_POST['F_name'];
}
if($_POST['L_Name']!=""){
    $_SESSION['Cust_Data']['L_Name']=$_POST['L_Name'];
}
if($_POST['Phone']!=""){
    $_SESSION['Cust_Data']['Phone']=$_POST['Phone'];
}
if($_POST['Country']!=""){
    $_SESSION['Cust_Data']['Country']=$_POST['Country'];
}
if($_POST['email']!=""){
    $_SESSION['Cust_Data']['email']=$_POST['email'];
}

//define variables to save data user entered to use in data base query
    $F_name=$_SESSION['Cust_Data']['F_name'];
    $L_Name=$_SESSION['Cust_Data']['L_Name'];
    $Phone= $_SESSION['Cust_Data']['Phone'];
    $Country= $_SESSION['Cust_Data']['Country'];
    $email=  $_SESSION['Cust_Data']['email'];
    $Nat_id=$_SESSION['Cust_Data']['Nat_id'];
}
// print the data user entered to make sure we have the correct data and there is no problem in catching data from POST form

    include("DB_CON.php"); //connect to the data base 
    try//to make sure that SQL run sucessfully
    {
        $update="UPDATE Customers 
        SET 
            F_name=? , L_Name=? , Phone=? , Country=? , email=? 
        WHERE Nat_id = ? ";//the data base SQL update statement
        $stmt=$con->prepare($update); //prepare the SQL statement to execute it 
        $stmt->execute(array(
            $F_name,
            $L_Name,
            $Phone,
            $Country,
            $email,
            $Nat_id
        ));//execute SQL update 
    }
    catch(PDOException $e)
    {
        echo "failed".$e->getMessage();//to trace errors if found
    }

?>
