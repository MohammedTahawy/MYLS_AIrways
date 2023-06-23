<?php
session_start();
include("./DB_CON.php");
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['book1']))
{
$_SESSION['POST_Book1']=$_POST['book1'];
$_SESSION['to']=strtolower($_POST['To']);
$_SESSION['from']=strtolower($_POST['From']);
$_SESSION['class']=strtolower($_POST['Class']);
$_SESSION['type']=strtolower($_POST['Type']);
}
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
  $T_num=0;
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  $str_arr[$T_num]=$row;
  ++$T_num;
  }
  --$T_num;
  $_SESSION['ticks']=$str_arr;
  $_SESSION['counter']=$T_num;
  header("Location:../index2.php");
?>
