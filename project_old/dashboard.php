<?php
session_start();
if(isset($_SESSION['Username'])){
    echo "welcome admin ".$_SESSION['Username']." to the dashboard" ;
}else
header('Location:login.php');
?>
 <form action="logout.php"method="post">
<input type="submit" value="logout">
</form> 