<?php 
session_start();
if(isset($_SESSION['Username'])){
include "con.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $to=$_POST['to'];
    $from=$_POST['from'];
    $class=$_POST['class'];
    $NatID=$_POST['NationalID'];
    $user=$_SESSION['Username'];


    $stmt=$con->prepare('INSERT INTO Book_Ticket 
    (_To, _From,class, NationalID,Username) 
    VALUES
    (?, ?, ?, ?, ?)');
    $stmt->execute(array($to,$from,$class,$NatID,$user));


    
}}else
exit("please login first");
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
to    <input type="text" name="to"> <br><br><br>
from  <input type="text" name="from"><br><br><br>
class <input type="text" name="class"><br><br><br>
NationalID <input type="text" name="NationalID"><br><br><br>
<input type="submit" value="enter">
</form>