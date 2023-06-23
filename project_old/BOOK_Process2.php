<?php
session_start();
include("DB_CON.php"); 
$stmt=$con->prepare("SELECT *
FROM Flights
WHERE 
Destination=? AND Source=? AND Type=?");
$stmt->execute(array($_SESSION['to'],$_SESSION['from'],$_SESSION['type']));
echo"<table border='1'>";
echo"<tr><td>TicketNumber</td><td>Aireline</td>
<td>To</td><td>From</td><td>Date</td><td>Price</td></tr>";
$T_num=1;
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
$str_arr[$T_num-1]=$row;
echo 
"<tr><td>{$T_num}</td><td>{$row['Travell_agency']}</td><td>{$row['Destination']}</td>
<td>{$row['Source']}</td><td>{$row['Date']}</td><td>{$row['Price']}</td></tr>";
++$T_num;
}
--$T_num;
if($_SERVER['REQUEST_METHOD']=='POST'){
$_SESSION['Ticket']=$str_arr[$_POST['Tick_num']];
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<select  name="Tick_num">
   <?php
   for($i=0;$i<$T_num;++$i){
echo" <option value={$i}>Ticket_{$i}</option>";
   }
   ?>
  </select>
<input type="submit" value="Next"><br>
</form>