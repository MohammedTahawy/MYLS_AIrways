
<?php
session_start();
include("DB_CON.php");
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    $date=date_format(date_create($_POST['date']), 'Y-m-d');
    
    $time=date_format(date_create($_POST['time']), 's:i:H');
    
    try//to make sure that SQL run sucessfully
    {
        $insert_flight="INSERT INTO Flights(
            Travell_agency,
            Normal_seats,
            Vip_seats,
            Date,
            Destination,
            Source,
            Type,
            time,
            Price,
            current_normal,
            current_vip,
            Vip_full,
            Normal_full
            
            
        )
        VALUES(
            ?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$con->prepare($insert_flight);
        $stmt->execute(array(
            $_POST['travel_agency'],
            $_POST['normal_seats'],
            $_POST['vip_seats'],
            $date,
            $_POST['to'],
            $_POST['from'],
            strtolower($_POST['type']),
            $time,
            $_POST['price'],
            0,
            0,
            0,
            0
    
        ));
    }
    catch(PDOException $e)
    {
        echo "failed".$e->getMessage();//to trace errors if found
    }
}
echo '<script type="text/JavaScript">
    alert("plane added sucessfully");
</script>'

?>