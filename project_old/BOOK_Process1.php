<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$_SESSION['to']=strtolower($_POST['To']);
$_SESSION['from']=strtolower($_POST['From']);
$_SESSION['class']=strtolower($_POST['Class']);
$_SESSION['type']=strtolower($_POST['Type']);
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
To<input type="text" name="To" id=""><br>
From<input type="text" name="From" id=""><br>
oneway<input type="radio" name="Type" value="one way"><br>
Round<input type="radio" name="Type" value="Round"><br>
Normal<input type="radio" name="Class" value="Normal"><br>
businness<input type="radio" name="Class" value="Vip"><br>
<input type="submit" value="Next"><br>
</form>