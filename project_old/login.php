<?php
session_start();
include "con.php";
if(isset($_SESSION['Username'])){
    header('Location:home.php');
}
//only do this when the user come from login page
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['user'];
$password=$_POST['password'];
$hashedpass=sha1($password);
//check the user in db
$stmt=$con->prepare("SELECT
 Username,Password 
 FROM Users 
 Where 
 Username=? AND Password=? And GroupID =1");
$stmt->execute(array($username,$hashedpass));
$count=$stmt->rowCount(); 
}
if($count>0){
$_SESSION['Username']=$username;
header('Location:home.php');
exit();
}
?>
<!-- DESIGN -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" name="user">
<input type="password" name="password">
<input type="submit" value="Login"> 
</form>