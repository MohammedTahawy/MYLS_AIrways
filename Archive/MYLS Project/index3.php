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
    <link rel="stylesheet" href="css/main2.css" />
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
                  <a class="nav-link" aria-current="page" href="index.html"
                    >HOME</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="index.html#offers">OFFERS</a>
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
                  <a class="nav-link" href="manage tickets/manage tickets.html"
                    >MANAGE</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="Edit/profile.html">EDIT INFO</a>
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

    <footer id="contact">
      <div class="footer-img">
        <div class="details position-relative">
          <div class="home-list">
            <div class="row justify-content-center text-center pb-4 m-0">
              <div class="col-2">
                <div class="butn book active-btn">BOOK</div>
              </div>
            </div>

            <div class="container">
              <div class="about-table w-75 m-auto rounded-3 shadow">
                <form action="">
                  <div class="row align-items-center section-2">
                    <div class="col-lg-7 inputs inputs-edit ps-5 pt-4">
                      <span
                        >Visa Number:<input
                          class="form-control ms-3"
                          type="text"
                          required
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
                          required
                      /></span>
                    </div>
                    <div class="col-lg-3 inputs inputs-edit ps-0">
                      <span
                        >VCC:<input
                          class="form-control ms-2 pe-0"
                          type="text"
                          required
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
                      <span><a href="index.html">Return</a></span>
                    </div>
                    <div class="col-lg-2 butn-visa-2 pb-3 pt-1">
                      <input type="submit" value="Submit" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-end align-items-center">
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
          <div class="col-lg-12 bg-footer position-absolute bottom-0">
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
  </body>
</html>
