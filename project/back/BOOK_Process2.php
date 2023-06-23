<?php
session_start();
include("DB_CON.php"); 
try{
   if($_SESSION['class']==="vip"){
   $stmt=$con->prepare("SELECT *
      FROM Flights
      WHERE 
      Destination=? AND Source=? AND Type=? AND Vip_full=? ");
      $stmt->execute(array($_SESSION['to'],$_SESSION['from'],$_SESSION['type'],!1));
   }
   if($_SESSION['class']==="normal")
   {
      $stmt=$con->prepare("SELECT *
      FROM Flights
      WHERE 
      Destination=? AND Source=? AND Type=? AND Normal_full=?");
      $stmt->execute(array($_SESSION['to'],$_SESSION['from'],$_SESSION['type'],!1));
   }

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
}
catch(PDOException $ERR){
   echo  $ERR->getMessage(); 
   }
if($_SERVER['REQUEST_METHOD']=='POST'){
echo'<pre>';
print_r($_POST);
echo'</pre>';
$_SESSION['Ticket']=$str_arr[$_POST['Tick_num']];


}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<select  name="Tick_num">
   <?php
   for($i=0,$label=1;$i<$T_num;++$i,++$label){
echo" <option value={$i}>Ticket_{$label}</option>";
   }
   ?>
  </select>
<input type="submit" value="Next"><br>
</form>



