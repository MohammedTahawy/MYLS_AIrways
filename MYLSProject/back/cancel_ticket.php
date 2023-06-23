<?php
session_start();
include("DB_CON.php");
$customer_id=$_SESSION['Cust_Data']['Nat_id'];//take it from session
try
{
    $Ticket_query=
    "SELECT 
        Ticket_id,
        Class,
        Flight,
        Trans_id
     FROM `Tickets`
     WHERE Cust=?";
    $stmt=$con->prepare($Ticket_query);
    $stmt->execute(array($customer_id));
    $Ticket_Info=$stmt->fetch(PDO::FETCH_ASSOC);//get foreign keys from ticket table to delete all related data



    //delete transaction related to the deleted ticket
    $Transaction_delete="DELETE FROM `Transaction` WHERE Trans_id=?";
    $stmt=$con->prepare($Transaction_delete);
    $stmt->execute(array($Ticket_Info['Trans_id']));

    //flight data base  edit 
    if ($Ticket_Info['Class']=="vip")
    {
        //query about seats from flight table 
        $Flight_query=
                    "SELECT
                        current_vip, Vip_full
                    FROM `Flights`
                    WHERE Flight_iD=? 
                    ";
        $stmt=$con->prepare($Flight_query);
        $stmt->execute(array($Ticket_Info['Flight']));
        $Flight_Info=$stmt->fetch(PDO::FETCH_ASSOC);

        $Flight_Info['current_vip']--;
        if($Flight_Info['Vip_full']===1){
            $Flight_Info['Vip_full']--;

        }
        //update flight data that related to the deleted ticket 
        $Flight_Update="UPDATE `Flights` SET `current_vip`=?, Vip_full=?  WHERE Flight_iD=?";
        $stmt=$con->prepare($Flight_Update);
        $stmt->execute(array($Flight_Info['current_vip'],$Flight_Info['Vip_full'],$Ticket_Info['Flight']));
    }
    if ($Ticket_Info['Class']=="normal")//خلي بالك من N 
    {
        //query about seats from flight table 
        $Flight_query=
                    "SELECT
                        current_normal,Normal_full
                    FROM `Flights`
                    WHERE Flight_iD=? 
                    ";
        $stmt=$con->prepare($Flight_query);
        $stmt->execute(array($Ticket_Info['Flight']));
        $Flight_Info=$stmt->fetch(PDO::FETCH_ASSOC);
        $Flight_Info['current_normal']--;
        if($Flight_Info['Normal_full']===1){
            $Flight_Info['Normal_full']--;
        }
        //update flight data that related to the deleted ticket 
        $Flight_Update="UPDATE `Flights` SET `current_normal`=?,Normal_full=? WHERE Flight_iD=?";
        $stmt=$con->prepare($Flight_Update);
        $stmt->execute(array($Flight_Info['current_normal'], $Flight_Info['Normal_full'],$Ticket_Info['Flight']));
    }

    //delete ticket ba2a
    $Ticket_Delete="DELETE FROM `Tickets` WHERE Ticket_id=?";
    $stmt=$con->prepare($Ticket_Delete);
    $stmt->execute(array($Ticket_Info['Ticket_id']));

    
}
catch(PDOException $e)
{
    echo "failed".$e->getMessage();//to trace errors if found
}
$_SESSION['TicketInfo']="";
header("Location:../manage tickets/manage tickets.php");
?>