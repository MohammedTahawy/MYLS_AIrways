
<?php  session_start();
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

                <li class="nav-item nav-active">
                  <a class="nav-link" href="Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="signup/signup.html">REGISTER</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="manage tickets/manage tickets.php"
                    >MANAGE</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="Edit/profile.php">EDIT INFO</a>
                </li>
              </ul>
              <form action="">
                <input
                  class="btn btn-outline-danger btn-nav"
                  value="LOG OUT"
                  type="input"
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
            </div>
            <div class="container">
              <div class="about-table w-75 m-auto rounded-3 shadow">
                <?php
                include("./back/DB_CON.php");
                if(isset($_SESSION['POST_Book1'])){
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
echo"
<div class='table-choose v-none pt-2'>
<table class='text-center table'>
  <tr>
    <th>Ticket Number</th>
    <th>Airline</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Price</th>
    <th>Choose</th>
  </tr>
  <form action ='./back/BOOK_Process2.php' method ='post' target ='ttt'>";
  $T_num=1;
  $i=0;
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  $str_arr[$T_num-1]=$row;
echo"
  <tr>
    <td>{$T_num}</td>
    <td>{$row['Travell_agency']}</td>
    <td>{$row['Source']}</td>
    <td>{$row['Destination']}</td>
    <td>{$row['Date']}</td>
    <td>{$row['Price']}</td>
    <td><input name='Tick_num' value={$i} type='radio' /></td>
  </tr>";
  ++$T_num;
  ++$i;
}
--$T_num;
 echo "
</table>
  <div class='row justify-content-center pb-3 pt-1'>
    <input
      type='button'
      value='Return'
      class='btn btn-danger return col-lg-2 me-4'
    />
    <input
      type='submit'
      name='book2'
      value='Next'
      class='btn btn-danger Next col-lg-2'
    />
  </div>
</form>
</div>
";
    }
    ?>
                <form action="">
                  <div class="row align-items-center section-2 v-none">
                    <div class="col-lg-7 inputs inputs-edit ps-5 pt-4">
                      <span
                        >Visa Number:<input
                          class="form-control ms-3"
                          type="text"
                          name=""
                          id=""
                      /></span>
                    </div>
                    <div class="col-lg-4 pt-4 fw-bold">
                      <p>Price: 12,000 EGP</p>
                    </div>
                    <br />
                    <div class="col-lg-4 inputs inputs-edit ps-5 pe-0">
                      <span
                        >Expire Date:<input
                          class="form-control w-50 ms-2"
                          type="date"
                          name=""
                          id=""
                      /></span>
                    </div>
                    <div class="col-lg-3 inputs inputs-edit ps-0">
                      <span
                        >VCC:<input
                          class="form-control ms-2 pe-0"
                          type="text"
                          name=""
                          id=""
                      /></span>
                    </div>
                    <div class="col-lg-4 fw-bold">
                      <p class="mb-0">Details Of Teckits:</p>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </p>
                    </div>
                    <br />
                    <div class="col-lg-7 ps-5 text-danger fw-bold">
                      <p>Please Fill To Complete Payment Process</p>
                    </div>
                    <div class="col-lg-2 butn-visa pb-3 pt-1">
                      <span>Return</span>
                    </div>
                    <div class="col-lg-2 butn-visa-2 pb-3 pt-1">
                      <span>Submit</span>
                    </div>
                  </div>
                </form>
                

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
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Repudiandae perferendis quaerat in nemo, rerum minus qui?
                      Hic, dolore! Cumque fugit perspiciatis a ea est atque
                      consectetur quasi. Cumque, eaque est!Hic, dolore! Cumque
                      fugit perspiciatis a ea est atque consectetur quasi.
                      Cumque, eaque est!
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
                    <p><i class="fa-solid fa-plane"></i> CAIRO</p>
                    <p><i class="fa-solid fa-plane"></i> LONDON</p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span>EGP 12,300</span></p>
                    <p>To EGP 10,500</p>
                  </div>
                  <form action="">
                    <input
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5"
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
                    <p><i class="fa-solid fa-plane"></i> CAIRO</p>
                    <p><i class="fa-solid fa-plane"></i> ASWAN</p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span>EGP 4,300</span></p>
                    <p>To EGP 3,300</p>
                  </div>
                  <form action="">
                    <input
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5"
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
                      <p><i class="fa-solid fa-plane"></i> CAIRO</p>
                      <p><i class="fa-solid fa-plane"></i> DUBAI</p>
                    </div>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span>EGP 9,500</span></p>
                    <p>To EGP 8,300</p>
                  </div>

                  <form action="">
                    <input
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5"
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
                    <p><i class="fa-solid fa-plane"></i> CAIRO</p>
                    <p><i class="fa-solid fa-plane"></i> ISTANBUL</p>
                  </div>

                  <div class="prices mt-4 me-3">
                    <p>From <span>EGP 8,600</span></p>
                    <p>To EGP 7,500</p>
                  </div>
                  <form action="">
                    <input
                      type="submit"
                      value="Take Offer"
                      class="btn btn-warning mt-5 ms-5"
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
    <script src="js/script2.js"></script>
    <iframe src="" frameborder="0" name="ttt" style="display:none;"></iframe>
  </body>
</html>
