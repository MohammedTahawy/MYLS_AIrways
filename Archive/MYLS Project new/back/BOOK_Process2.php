<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['book2'])){
$_SESSION['Ticket']=$_SESSION['ticks'][$_POST['Tick_num']];
}



