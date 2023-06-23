<?php
session_start();
if(isset($_SESSION['Username'])){
session_unset();
session_destroy();
echo "done";  
}
  else
  echo "no session";
?>