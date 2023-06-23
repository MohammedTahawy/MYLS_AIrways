<?php
session_start();
include("./DB_CON.php");
if($_POST['del']=="1"){
    $stmt=$con->prepare("
        DELETE FROM offers
        WHERE offer_id=?
          ");
    $stmt->execute(array(1));
}
if($_POST['del']=="2"){
    $stmt=$con->prepare("
        DELETE FROM offers
        WHERE offer_id=?
          ");
    $stmt->execute(array(2));
}
if($_POST['del']=="3"){
    $stmt=$con->prepare("
        DELETE FROM offers
        WHERE offer_id=?
          ");
    $stmt->execute(array(3));
}
if($_POST['del']=="4"){
    $stmt=$con->prepare("
        DELETE FROM offers
        WHERE offer_id=?
          ");
    $stmt->execute(array(4));
}
echo '<script type="text/JavaScript">

</script>'
 ?>

