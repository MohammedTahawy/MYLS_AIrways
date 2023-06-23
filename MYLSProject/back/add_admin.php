<?php
include('DB_CON.php');
if ($_SERVER['REQUEST_METHOD']=="POST") {
//taken data from user 
    $nat = $_POST['Nat_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $password = $_POST['password']; 
    $fname = $_POST['F_name']; 
    $lname = $_POST['L_Name']; 
    $country = $_POST['Country']; 
    $type=1;
try{
    
        $regg=("SELECT Nat_id
     FROM Customers 
     Where Nat_id =?
     ");
     $stmt=$con->prepare($regg);
    $stmt->execute(array($nat));
    $data_exist=$stmt->fetch(PDO::FETCH_ASSOC);
    if($data_exist['Nat_id']!="")
    {
            echo '<script type="text/JavaScript">
            alert("Account exists");
            window.location.href = "../signup/add_admin.html";
            
                
        </script>';
        // header("Location:../Login/login.html");    
    }
    else{
        $reg="INSERT INTO Customers (Nat_id,password,F_name,L_name,Phone,Country,email,type)
        VALUES (?,?,?,?,?,?,?,0) ";
        $stmt=$con->prepare($reg);
        $stmt->execute(array($nat,$password,$fname,$lname,$phone,$country,$email));
        header("Location:../Login/login.html");
        }
    
}
catch(PDOException $e){
echo $e;
}


}
?>
