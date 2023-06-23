<?php
session_start();
include("DB_CON.php"); 
$_SESSION['Ticket'];
$_SESSION['Nat_ID']=123456789;




?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Visa_Number: <input type="text" name="Vs" ><br>
CC: <input type="text" name="CC" ><br>
Exp_Date: <input type="date" name="Date" >
<input type="submit" value="Submit"><br>
</form>