<?php
session_start();
include("DB_CON.php");
$_SESSION['TicketInfo']=$_SESSION['Ticket'];
$price=$_SESSION['Ticket']['Price'];
$flight_id=$_SESSION['Ticket']['Flight_iD'];
$type=$_SESSION['Ticket']['Type'];
$class=$_SESSION['class'];
$_SESSION['TicketInfo']['Class']=$class;
$visa=$_POST['Vs'];
$date=$_POST['Date'];
$nat=$_SESSION['Cust_Data']['Nat_id'];
echo'<pre>';
print_r($_SESSION['Ticket']);
echo'</pre>';

if($_SERVER['REQUEST_METHOD']=='POST'){
    try{
        $Insert_Transaction=("INSERT INTO Transaction 
(Bill,Visa,Date) VALUES (?,?,?)");
$stmt=$con->prepare($Insert_Transaction);
$stmt->execute(array($price,$visa,$date));
$last_id = $con->lastInsertId();

$Insert_Ticket=("INSERT INTO Tickets 
(Flight ,Cust ,Price , Class ,Type ,Trans_id )
 VALUES(?,?,?,?,?,?)");
$stmt=$con->prepare($Insert_Ticket);
$stmt->execute(array($flight_id,$nat,$price,$class,$type,$last_id));



        if($_SESSION['class']==="normal"){
$max_normal=$_SESSION['Ticket']['current_normal']+1; 

$Increment_Current_Seats=("UPDATE Flights SET current_normal = ? WHERE Flight_iD = ? ");

$stmt=$con->prepare($Increment_Current_Seats);

$stmt->execute(array($max_normal,$flight_id));
}



        if($_SESSION['class']==="vip"){
$max_vip=$_SESSION['Ticket']['current_vip']+1;
$Increment_Current_Seats=("UPDATE Flights SET current_vip = ? WHERE Flight_iD =?");
$stmt=$con->prepare($Increment_Current_Seats);
$stmt->execute(array($max_vip,$flight_id));
        }



        if($_SESSION['Ticket']['Normal_seats']==$max_normal){
$Update_Current_Normal_Seats=("UPDATE Flights SET Normal_full = ? WHERE Flight_iD =?");
$stmt=$con->prepare($Update_Current_Normal_Seats);
$stmt->execute(array(1,$flight_id));

        }

        if($_SESSION['Ticket']['Vip_seats']==$max_vip){
 $Update_Current_Vip_Seats=("UPDATE Flights SET Vip_full = ? WHERE Flight_iD =?");
$stmt=$con->prepare($Update_Current_Vip_Seats);
 $stmt->execute(array(1,$flight_id));
        
                }
                $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ERR){
        echo  $ERR->getMessage(); 
        }



}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Visa_Number: <input type="text" name="Vs" value="" ><br>
CC: <input type="text" name="CC" ><br>
Exp_Date: <input type="date" name="Date" >
<input type="submit" value="Submit"><br>
</form>

<?Php exit(); ?>