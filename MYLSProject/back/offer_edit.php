<?php
session_start();
include("./DB_CON.php");
if($_POST['f1']!=""&&$_POST['p1']!=""){
    $stmt=$con->prepare("
        UPDATE offers
        SET flight_id =? ,
        price=? 
        WHERE offer_id=?
          ");
    $stmt->execute(array($_POST['f1'],$_POST['p1'],1));
}
if($_POST['f2']!=""&&$_POST['p2']!=""){
    $stmt=$con->prepare("
        UPDATE offers
        SET flight_id =? ,
        price=? 
        WHERE offer_id=?
          ");
    $stmt->execute(array($_POST['f2'],$_POST['p2'],2));
}
if($_POST['f3']!=""&&$_POST['p3']!=""){
    $stmt=$con->prepare("
        UPDATE offers
        SET flight_id =? ,
        price=? 
        WHERE offer_id=?
          ");
    $stmt->execute(array($_POST['f3'],$_POST['p3'],3));
}
if($_POST['f4']!=""&&$_POST['p4']!=""){
    $stmt=$con->prepare("
        UPDATE offers
        SET flight_id =? ,
        price=? 
        WHERE offer_id=?
          ");
    $stmt->execute(array($_POST['f4'],$_POST['p4'],4));
}

echo '<script type="text/JavaScript">
alert("offer updated");
</script>'
?>