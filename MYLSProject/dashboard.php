<?php     
session_start();
include("./back/DB_CON.php");
// ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MYLS Airways</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/main3.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg position-fixed top-0 end-0 start-0">
      <div class="container">
        <img class="logo" src="img/logo.png" alt="" />
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
                  <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="#contact">CONTACT US</a>
                </li>

                <!-- <li class="nav-item nav-active">
                  <a class="nav-link" href="Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="signup/signup.html">REGISTER</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="manage tickets/manage tickets.html"
                    >MANAGE</a
                  >
                </li> -->

                <li class="nav-item nav-active">
                  <a class="nav-link" href="./signup/add_admin.html">Add Admin</a>
                </li>
              </ul>
              <form action="./back/logout.php" method="POST">
                <input
                  class="btn btn-outline-danger btn-nav"
                  value="LOG OUT"
                  type="submit"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="home">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="bg-overlay position-absolute"></div>
              <div class="carousel-item active">
                <img src="img/plane.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pexels-asad-photo-maldives-3319961.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img src="img/slide1.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/slide2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pexels-pixabay-373409.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev position-absolute prev"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next position-absolute next"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="offers" class="offers">
      <div class="main-photo position-relative">
        <div class="details position-relative">
          <div class="home-list">
            <div class="row justify-content-center text-center pb-4 m-0">
              <div class="col-2">
                <div class="butn book active-btn">Add Flight</div>
              </div>
              <div class="col-2">
                <div class="butn timetable">edit Offer</div>
              </div>
              <div class="col-2">
                <div class="butn news">Delete Offer</div>
              </div>
            </div>

            <div class="container">
              <div class="about-table w-75  m-auto rounded-3 shadow">
              <form action="./back/admin_add_flight.php" method="POST" target="ttt">
                  <div class="row align-items-center section-1">
                    <div class="col-lg-5 pt-4 pb-3 ps-5">
                      <div class="inputs ps-1">
                      <input
                            required
                            placeholder="Round or One way"
                            class="form-control ms-4"
                            type="text"
                            name="type"
                            id=""/>
                        <span
                          ><input
                            required
                            placeholder="From"
                            class="form-control ms-4"
                            type="text"
                            name="from"
                            id=""
                        /></span>
                        <span
                          ><input
                          placeholder="To"
                            required
                            class="form-control ms-4"
                            type="text"
                            name="to"
                            id=""
                        /></span>
                        <span
                          ><input
                            required
                            class="form-control ms-4"
                            type="Date"
                            name="date"
                            id=""
                        /></span>
                      </div>
                    </div>
                    <div class="col-lg-5 pe-0">
                      <div class="inputs ps-1 pt-4 pb-3">
                        <span
                          ><input
                            required
                            placeholder="Travell Agency"
                            class="form-control ms-4"
                            type="text"
                            name="travel_agency"
                            id=""
                        /></span>
                        <span
                          ><input
                            required
                            placeholder="Price"
                            class="form-control ms-4"
                            type="number"
                            name="price"
                            id=""
                        /></span>
                        <span
                          ><input
                            required
                            placeholder="Max normal seats"
                            class="form-control ms-4"
                            type="number"
                            name="normal_seats"
                            id=""
                        /></span>
                        <span
                          ><input
                            required
                            placeholder="Max Vip seats"
                            class="form-control ms-4"
                            type="number"
                            name="vip_seats"
                            id=""
                        /></span>
                        <span
                          ><input
                            required
                            placeholder="Time"
                            class="form-control ms-4"
                            type="time"
                            name="time"
                            id=""
                        /></span>
                      </div>
                    </div>
                    <div class="col-lg-2 butn-list ps-0">
                      <span>
                        <input class="btn btn-danger" value="Submit" type="submit" />
                      </span>
                    </div>
                  </div>
                </form>


                <div class="pt-1 pb-1">
                
                  <table class="w-100 text-center tm-table table v-none">
                    <tr>
                    <td>Offer ID</td>
                    <td>Flight ID</td>
                    <td>Old Price</td> 
                    <td>New Price (Offer)</td>
                    </tr>
                 <?php  
                 $stmt=$con->prepare("
                 SELECT 
                 offers.flight_id,
                 offers.offer_id,
                 offers.price,
                 flights.Price
                 FROM offers
                 Join flights
                 ON offers.flight_id = Flights.Flight_iD

                       ");
                 $stmt->execute();
                 $arrc=0;
                 
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                  $offer_arr[$arrc]=$row;
                  $arrc++;
                 }
                 ?>
                 <form action="./back/offer_edit.php" method="post" target="ttt">
                 <tr>
                 <td><?php echo $offer_arr[0]['offer_id'] ?></td>
                 <td><input type='text' name="f1" placeholder=<?php echo $offer_arr[0]['flight_id']?> ></td>
                 <td> <?php echo $offer_arr[0]['Price'] ?> </td>
                 <td><input type='text' name="p1" placeholder=<?php echo $offer_arr[0]['price']?> ></td>
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[1]['offer_id'] ?></td>
                 <td><input type='text' name="f2" placeholder=<?php echo $offer_arr[1]['flight_id']?> ></td>
                 <td> <?php echo $offer_arr[1]['Price'] ?> </td>
                 <td><input type='text' name="p2" placeholder=<?php echo $offer_arr[1]['price']?> ></td>
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[2]['offer_id'] ?></td>
                 <td><input type='text' name="f3" placeholder=<?php echo $offer_arr[2]['flight_id']?> ></td>
                 <td> <?php echo $offer_arr[2]['Price'] ?> </td>
                 <td><input type='text' name="p3" placeholder=<?php echo $offer_arr[2]['price']?> ></td>
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[3]['offer_id'] ?></td>
                 <td><input type='text' name="f4" placeholder=<?php echo $offer_arr[3]['flight_id']?> ></td>
                 <td> <?php echo $offer_arr[3]['Price'] ?> </td>
                 <td>
                    <input type='text' name="p4" placeholder=<?php echo $offer_arr[3]['price']?> ></td>
                 </tr>
                  </table>
                </div>
                <div class="butn-admin text-center">
                <input type="submit" value="submit" class="w-50  btn btn-danger tm-table table v-none" 
                >
                </div>
                </form>

                <div
                  class="  pb-3 pt-4 nws v-none"
                >
                 <table class="w-100 text-center">
                <tr>
                <td>Offer ID</td>
                <td>Flight ID</td>
                <td>Old Price</td> 
                <td>New Price (Offer)</td>
                </tr>
                <?php  
                 $stmt=$con->prepare("
                 SELECT 
                 offers.flight_id,
                 offers.offer_id,
                 offers.price,
                 flights.Price
                 FROM offers
                 Join flights
                 ON offers.flight_id = Flights.Flight_iD
                       ");
                 $stmt->execute();
                 $arrc=0;
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $offer_arr[$arrc]=$row;
                    $arrc++;
                 }
                 ?>
                <form action="./back/offer_delete.php" method="post" target="ttt">
                <tr>
                 <td><?php echo $offer_arr[0]['offer_id'] ?></td>
                 <td><?php echo $offer_arr[0]['flight_id']?></td>
                 <td><?php echo $offer_arr[0]['Price']?> </td>
                 <td><?php echo $offer_arr[0]['price']?> </td>
                
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[1]['offer_id'] ?></td>
                 <td><?php echo $offer_arr[1]['flight_id']?></td>
                 <td><?php echo $offer_arr[1]['Price']?> </td>
                 <td><?php echo $offer_arr[1]['price']?> </td>
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[2]['offer_id'] ?></td>
                 <td><?php echo $offer_arr[2]['flight_id']?></td>
                 <td><?php echo $offer_arr[2]['Price']?> </td>
                 <td><?php echo $offer_arr[2]['price']?> </td>
                 </tr>
                 <tr>
                 <td><?php echo $offer_arr[3]['offer_id'] ?></td>
                 <td><?php echo $offer_arr[3]['flight_id']?></td>
                 <td><?php echo $offer_arr[3]['Price']?> </td>
                 <td><?php echo $offer_arr[3]['price']?> </td>
                 </tr>
                </form>
                 </table>
                 <div class="w-100 text-center pt-3 pe-5">
                 <input class="w-50" type="text" name="del" placeholder="Enter Ticket Id To Delete">
                 <input class="btn btn-danger mb-1" type="submit" value="submit">
                 </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
<!-- <iframe target="ttt" style="display:none;" frameborder="0"></iframe> -->
    <footer id="contact">
      <div class="footer-img">
        <div class="container h-100">
          <div class="row justify-content-end align-items-center h-100">
            <div class="col-lg-5 text-footer">
              <h2 class="text-edit">Keep In Touch</h2>
              <p class="pt-2">
                FOLLOW MYLS AIRWAYS ON SOCIAL MEDIA TO KEEP UP TO DATE WITH
                LATEST UPDATES.
              </p>
              <h2 class="pt-2">Follow Us On</h2>
              <div class="pt-3">
                <span><i class="fa-brands fa-facebook"></i></span>
                <span><i class="fa-brands fa-twitter"></i></span>
                <span><i class="fa-brands fa-instagram"></i></span>
                <span><i class="fa-brands fa-linkedin"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-0">
          <div class="col-lg-12 bg-footer">
            <div class="line pb-3"></div>
            <p class="text-center text-light pt-2 pb-2">
              &copy; 2022 MYLS AIRWAYS, All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script3.js"></script>
    <iframe src="" name="ttt" style="display:none;" frameborder="0"></iframe>
  </body>
</html>
