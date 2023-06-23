<?php
session_start();
include("DB_CON.php");
for($i=1;$i<=4;$i++){
if(isset($_GET[$i])){
$sql_offer="SELECT flight_id, price FROM offers WHERE offer_id=?";
$stmt=$con->prepare($sql_offer);
$stmt->execute(array($i));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$f_id=$row['flight_id'];
$price=$row['price'];

$offer_flight="SELECT * FROM Flights WHERE Flight_iD=?";
$stmt=$con->prepare($offer_flight);
$stmt->execute(array($f_id));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['Ticket']=$row;
$_SESSION['Ticket']['Price']=$price;
header("Location:../index3.html");
}
}

?>


