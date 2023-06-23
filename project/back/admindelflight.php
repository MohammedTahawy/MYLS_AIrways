<?php 
session_start();
include("./DB_CON.php");
$flightsquery="SELECT
            `Travell_agency`,
            `Flight_iD`,
            `Date`,
            `Destination`,
            `Source`,
            `Type`
            FROM
            `Flights`
            ";
$stmt=$con->prepare($flightsquery);
$stmt->execute();
$flights=$stmt->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($flights);
echo "<pre>";
?>