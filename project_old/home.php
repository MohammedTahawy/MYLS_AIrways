<?php
session_start();
if(isset($_SESSION['Username'])){
    echo "welcome  ".$_SESSION['Username']." to the home" ;
}
?>
 <form action="ticket.php">
<input type="submit" value="book">
</form> 
<form action="logout.php">
<input type="submit" value="logout">
</form> 