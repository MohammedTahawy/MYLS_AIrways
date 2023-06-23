<?php 
session_start();
if($_SESSION['TicketInfo']=="")
{
echo
' 
<style>  

.phpnone{

display:none;

}
</style>
';

}else
{
  echo
  ' 
  <style>  

  .noTicket{

    display:none;

    }
    </style>
    ';

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/W3Schools_2020_2.svg" />
    <title>MYLS Airways</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="css/manage tickets.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg position-fixed top-0 end-0 start-0">
      <div class="container">
        <img class="logo2" src="logo.png" alt="" />
        <div class="navs">
          <button
            class="navbar-toggler text-white"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="sit offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item nav-active">
                  <a class="nav-link" aria-current="page" href="../index.html"
                    >HOME</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../index.html#offers">OFFERS</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../index.html#contact"
                    >CONTACT US</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="../signup/signup.html">REGISTER</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="#">MANAGE</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../Edit/profile.html">EDIT INFO</a>
                </li>
              </ul>
              <form action="">
                <input
                  class="btn btn-outline-danger btn-nav"
                  value="LOG OUT"
                  type="button"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="overlay"></div>
    <div class="formContent" >
      <div class="noTicket">No Ticket</div>
       <div class="phpnone">
       <h2>TICKETS:</h2>
       <div class="formcontent2">
        <div class="parent">
        <table>
          <tr>
            <th>FULL NAME:</th>
          </tr>
          <tr class="tr2">
            <td colspan="3"> <?php  echo $_SESSION['Cust_Data']['F_name'].
            " ".$_SESSION['Cust_Data']['L_Name'];?> </td>
          </tr>
          <tr>
            <th>FLIGHT:</th>
          </tr>
          <tr>
            <td colspan="3"><?php 
            echo 
            "PL-".$_SESSION['TicketInfo']['Flight_iD']."-".$_SESSION['TicketInfo']['Travell_agency']
            ;?></td>
          </tr>
          <tr>
            <th>DATE</th>
            <th>TAKE-OFF TIME</th>
            <th>LANDING TIME</th>
          </tr>
          <tr>
            <td><?php echo $_SESSION['TicketInfo']['Date'] ?></td>
            <td><?php echo $_SESSION['TicketInfo']['Time'] ?></td>
            <td><?php echo ($_SESSION['TicketInfo']['Time']) ?></td>
          </tr>
          <tr>
            <th colspan="2">FROM</th>
            <th>TO</th>
          </tr>
          <tr>
            <td><?php  echo $_SESSION['TicketInfo']['Source'];?></td>
            <td></td>
            <td><?php  echo $_SESSION['TicketInfo']['Destination'];?></td>
          </tr>
          
        </table>
        <div>
          <img src="logo.png" class="logo">
        <table class="table2">
          <tr>
            <th>CLASS</th>
            <th>SEAT</th>
          </tr>
          <tr>
            <td><?php echo $_SESSION['TicketInfo']['Class'] ?></td>
            <td><?php echo "A".$_SESSION['TicketInfo']['Flight_iD'] ?></td>
          </tr>
        </table>
        <form action="../back/cancel_ticket.php" method="post">
        <input class="btn-cancel btn btn-danger" type="submit" value="Cancel Ticket" />
        </form>
        </div>
      </div>
       </div>

     </div>
    <div class="row m-0 ab-footer bg-footer">
      <div class="line pb-3"></div>
      <div class="col-lg-7">
        <p class="text-end text-light">
          &copy; 2022 MYLS AIRWAYS, All Rights Reserved
        </p>
      </div>
      <div class="col-lg-5 pe-4 text-end">
        <div class="text-white text-footer">
          <div class="pb-2">
            <span><i class="fa-brands fa-facebook"></i></span>
            <span><i class="fa-brands fa-twitter"></i></span>
            <span><i class="fa-brands fa-instagram"></i></span>
            <span><i class="fa-brands fa-linkedin"></i></span>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
