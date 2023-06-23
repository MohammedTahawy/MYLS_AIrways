
<?php  session_start();
include("./back/DB_CON.php");

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
    <link rel="stylesheet" href="css/main.css" />
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
                  <a class="nav-link" aria-current="page" href="#">HOME</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="#offers">OFFERS</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="#contact">CONTACT US</a>
                </li>

                <!-- <li class="nav-item nav-active">
                  <a class="nav-link" href="Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="signup/signup.html">REGISTER</a>
                </li> -->

                <li class="nav-item nav-active">
                  <a class="nav-link" href="manage tickets/manage tickets.php"
                    >MANAGE</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="Edit/profile.php">EDIT INFO</a>
                </li>
              </ul>
              <form action="./back/logout.php "method="POST">
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
                <div class="butn book active-btn">BOOK</div>
              </div>
              <div class="col-2">
                <div class="butn timetable">TIMETABLE</div>
              </div>
              <div class="col-2">
                <div class="butn news">NEWS</div>
              </div>
            </div>
            <div class="container">
              <div class="about-table w-75 m-auto rounded-3 shadow">
              <form action="./back/BOOK_Process1.php" method="post" >
                  <!-- book start here -->
                  <div class="row align-items-center section-1">
                    <div class="col-lg-5 pt-4 pb-3 ps-5">
                      <div class="trip ps-3 pt-2">
                        <p class="text-black">Trip:</p>
                        <span class="ps-4"
                          ><input type="radio" required name="Type" value="one way"/> One
                          Way</span
                        >
                        <span class="ps-3"
                          ><input type="radio" required name="Type" value="Round" />
                          Round</span
                        >
                      </div>
                      <div class="ps-3 pt-4 classes">
                        <p class="text-black">Class:</p>
                        <span class="ps-2">
                          <input type="radio" required name="Class" value="Normal"/> Normal</span
                        >
                        <span class="ps-4"
                          ><input type="radio" required name="Class" value="Vip"/>
                          Business</span
                        >
                      </div>
                    </div>

                    <div class="col-lg-5 pe-0">
                      <div class="inputs ps-3">
                        <span
                          >From:<input
                            required
                            class="form-control ms-4"
                            type="text"
                            name="From"
                            id=""
                        /></span>
                        <br />
                        <span
                          >To:<input
                            required
                            class="form-control mt-4 ms-5"
                            type="text"
                            name="To"
                            id=""
                        /></span>
                      </div>
                    </div>
                    <div class="col-lg-2 butn-list ps-0">
                      <span>
                        <input value="Next" type="submit" name="book1"/>
                      </span>
                    </div>
                  </div>
                   </form>
                <div class="pt-1 pb-1">
                  <table class="w-100 text-center tm-table table v-none">
                    <tr>
                      <th>Flight</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Time</th>
                    </tr>
                    <?php
                      
                      $date= date('y-m-d');
                      $stmt=$con->prepare("SELECT Time,Destination,Source,Travell_agency
                      FROM Flights
                      WHERE 
                        Date=?");
                      $stmt->execute(array($date));
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      echo 
                      "
                      <tr>
                      <td>{$row['Travell_agency']}</td>
                      <td>{$row['Source']}</td>
                      <td>{$row['Destination']}</td>
                      <td>{$row['Time']}</td>
                    </tr>
                      ";
                                }
                              ?>
                    
                   
                  </table>
                </div>

                <div
                  class="row align-items-center justify-content-center pb-3 pt-4 nws v-none"
                >
                  <div class="col-lg-5">
                    <img
                      class="img-fluid mb-3"
                      src="img/pexels-carlos-pernalete-tua-674783.jpg"
                      alt=""
                    />
                  </div>
                  <div class="col-lg-5">
                    <p>
                      
                       <?php    
                       echo"Fligths that ran out of normal seats :".'<br>';
                          $stmt=$con->prepare("SELECT Travell_agency, Flight_iD
                          FROM Flights
                          WHERE 
                            Normal_full=?");
                          $stmt->execute(array(1));
                          $i=1;
                          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            echo $i."-".$row['Travell_agency'].$row['Flight_iD'].'<br>';
                            ++$i;
                          }
                          echo"------------------------".'<br>';
                          echo"Fligths that ran out of vip seats :".'<br>';
                          $stmt=$con->prepare("SELECT Travell_agency, Flight_iD
                          FROM Flights
                          WHERE 
                            Vip_full=?");
                          $stmt->execute(array(1));
                          $i=1;
                          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            echo $i."-".$row['Travell_agency'].$row['Flight_iD'].'<br>';
                            ++$i;
                          }
                      ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container offers-view">
          <div class="row pb-5 justify-content-center text-light">
            <div class="col-12 text-center">
              <h2>MYLS OFFERS</h2>
              <?php  
              $stmt=$con->prepare("
              SELECT 
              Flights.Destination,
              Flights.Source,
              Flights.Price,
              offers.price
              FROM Flights
              JOIN offers
              ON offers.flight_id = Flights.Flight_iD
              WHERE Flights.Normal_full=0 AND Flights.Vip_full=0
                    ");
              $stmt->execute();
              $arrc=0;
              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
               $arr[$arrc]=$row;
               $arrc++;
              }
              ?>
              <p class="pt-3 p-offers">
                Discover MYLS best fare deals on selected routes
              </p>
            </div>
            <div class="col-5 col-lg-2 text-center pt-4">
              <p class="special">SPECIAL OFFERS</p>
            </div>
          </div>
          <div class="row justify-content-center pb-5 text-light">
            <div class="col-lg-4 col-5 me-4">
              <div class="edit" style="background-image: url('img/london.jpg')">
                <div class="overlay position-absolute ps-4 pt-4">
                  <div class="places">
                    <p><i class="fa-solid fa-plane"></i><?php echo $arr[0]['Source'] ?></p>
                    <p><i class="fa-solid fa-plane"></i> <?php echo $arr[0]['Destination'] ?></p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span><?php echo "EGP".$arr[0]['Price'] ?></span></p>
                    <p>To <?php echo "EGP".$arr[0]['price'] ?></p>
                  </div>
                  <form action="./back/offers.php" method ="get">
                    <input
                      type="submit"
                      name="1"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5 "
                    />
                  </form>
                  <div class="clear-fix"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-5">
              <div class="edit" style="background-image: url('img/Aswan.jpg')">
                <div class="overlay position-absolute ps-4 pt-4">
                  <div class="places">
                    <p><i class="fa-solid fa-plane"></i> <?php echo "EGP".$arr[1]['Source'] ?></p>
                    <p><i class="fa-solid fa-plane"></i> <?php echo $arr[1]['Destination'] ?></p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span><?php echo"EGP" .$arr[1]['Price'] ?></span></p>
                    <p>To <?php echo"EGP". $arr[1]['price'] ?></p>
                  </div>
                  <form action="./back/offers.php" method ="get">
                    <input
                    name="2"
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5 "
                      
                    />
                  </form>
                  <div class="clear-fix"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center text-light">
            <div class="col-lg-4 col-5 me-4">
              <div class="edit" style="background-image: url('img/dubai.jpg')">
                <div class="overlay position-absolute ps-4 pt-4">
                  <div class="places">
                    <div>
                      <p><i class="fa-solid fa-plane"></i> <?php echo $arr[2]['Source'] ?></p>
                      <p><i class="fa-solid fa-plane"></i> <?php echo $arr[2]['Destination'] ?></p>
                    </div>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span><?php echo"EGP". $arr[2]['Price'] ?></span></p>
                    <p>To <?php echo "EGP".$arr[2]['price'] ?></p>
                  </div>

                  <form action="./back/offers.php" method ="get">
                    <input
                      type="submit"
                      name="3"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5 "
                    />
                  </form>
                  <div class="clear-fix"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-5">
              <div
                class="edit"
                style="background-image: url('img/Istanbul.jpg')"
              >
                <div class="overlay position-absolute ps-4 pt-4">
                  <div class="places">
                    <p><i class="fa-solid fa-plane"></i><?php echo $arr[3]['Source'] ?></p>
                    <p><i class="fa-solid fa-plane"></i> <?php echo $arr[3]['Destination'] ?></p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span><?php echo "EGP".$arr[3]['Price'] ?></span></p>
                    <p>To <?php echo "EGP".$arr[3]['price'] ?></p>
                  </div>
                  <form action="./back/offers.php" method ="get">
                    <input
                    name="4"
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5 "
                    />
                  </form>
                  <div class="clear-fix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
    <script src="js/script.js"></script>
    <iframe src="" frameborder="0" name="ttt" style="display:none;"></iframe>
  </body>
</html>
