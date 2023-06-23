<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Travel Agency<input type="text" name="travel_agency"  ><br>
flight id<input type="number" name="flight_id"><br>
normal_seats<input type="number" name="normal_seats" ><br>
vip_seats<input type="number" name="vip_seats" ><br>

to<input type="text" name="to" ><br>
from<input type="text" name="from" ><br>
type<input type="text" name="type" ><br>

price<input type="number" name="price"><br>
<input type="submit" value="update"><br>
</form>
<?php
session_start();
include("DB_CON.php");
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    $insert_flight="INSERT INTO `Flights`(
        `Travell_agency`,
        `Flight_iD`,
        `Normal_seats`,
        `Vip_seats`,
        `Destination`,
        `Source`,
        `Type`,
        `Price`,
        `Date`, 
        `time`
        
    )
    VALUES(
        ?,?,?,?,?,?,?,?,?,?
    )";
    $stmt=$con->prepare($insert_flight);
    $stmt->execute(array(
        $_POST['travel_agency'],
        $_POST['flight_id'],
        $_POST['normal_seats'],
        $_POST['vip_seats'],
        $_POST['to'],
        $_POST['from'],
        $_POST['type'],
        $_POST['price'],
        date("y-mm-dd"),
        time()
  
    ));
}

?>