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



  <?php   include("./back/navbar.php");    ?>




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
                <img
                  src="img/pexels-pixabay-358319.jpg"
                  class="d-block w-100"
                  alt="..."
                />
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
                <form action="">
                  <div class="row align-items-center section-1">
                    <div class="col-lg-5 pt-4 pb-3 ps-5">
                      <div class="trip ps-3 pt-2">
                        <p class="text-black">Trip:</p>
                        <span class="ps-4"
                          ><input type="radio" required name="same" /> One
                          Way</span
                        >
                        <span class="ps-3"
                          ><input type="radio" required name="same" />
                          Round</span
                        >
                      </div>
                      <div class="ps-3 pt-4 classes">
                        <p class="text-black">Class:</p>
                        <span class="ps-2">
                          <input type="radio" required name="s" /> Normal</span
                        >
                        <span class="ps-4"
                          ><input type="radio" required name="s" />
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
                            name=""
                            id=""
                        /></span>
                        <br />
                        <span
                          >To:<input
                            required
                            class="form-control mt-4 ms-5"
                            type="text"
                            name=""
                            id=""
                        /></span>
                      </div>
                    </div>
                    <div class="col-lg-2 butn-list ps-0">
                      <span>
                        <input value="Next" type="submit" />
                      </span>
                    </div>
                  </div>
                </form>

                <div class="table-choose v-none pt-2">
                  <table class="text-center table">
                    <tr>
                      <th>Ticket Number</th>
                      <th>Airline</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Choose</th>
                    </tr>
                    <tr>
                      <td>110283767</td>
                      <td>Dubai</td>
                      <td>Egypt</td>
                      <td>Dubai</td>
                      <td>6/12/2022</td>
                      <td>20,000 EGP</td>
                      <td><input name="s_c" type="radio" /></td>
                    </tr>
                    <tr>
                      <td>109287466</td>
                      <td>London</td>
                      <td>Egypt</td>
                      <td>London</td>
                      <td>9/12/2022</td>
                      <td>25,000 EGP</td>
                      <td><input name="s_c" type="radio" /></td>
                    </tr>
                    <tr>
                      <td>145886907</td>
                      <td>Istanbul</td>
                      <td>Egypt</td>
                      <td>Istanbul</td>
                      <td>12/12/2022</td>
                      <td>15,000 EGP</td>
                      <td><input name="s_c" type="radio" /></td>
                    </tr>
                  </table>
                  <form action="">
                    <div class="row justify-content-center pb-3 pt-1">
                      <input
                        type="button"
                        value="Return"
                        class="btn btn-danger return col-lg-2 me-4"
                      />
                      <input
                        type="button"
                        value="Next"
                        class="btn btn-danger Next col-lg-2"
                      />
                    </div>
                  </form>
                </div>

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
                <div class="pt-1 pb-1">
                  <table class="w-100 text-center tm-table table v-none">
                    <tr>
                      <th>Flight</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Time</th>
                    </tr>
                    <tr>
                      <td>Flight1</td>
                      <td>Dubai</td>
                      <td>Egypt</td>
                      <td>2:50 AM</td>
                    </tr>
                    <tr>
                      <td>Flight2</td>
                      <td>London</td>
                      <td>Egypt</td>
                      <td>9:15 AM</td>
                    </tr>
                    <tr>
                      <td>Flight3</td>
                      <td>Istanbul</td>
                      <td>Egypt</td>
                      <td>10:37 AM</td>
                    </tr>
                    <tr>
                      <td>Flight4</td>
                      <td>Boland</td>
                      <td>Egypt</td>
                      <td>12:30 AM</td>
                    </tr>
                    <tr>
                      <td>Flight5</td>
                      <td>Brzail</td>
                      <td>Egypt</td>
                      <td>12:30 AM</td>
                    </tr>
                    <tr>
                      <td>Flight6</td>
                      <td>USA</td>
                      <td>Egypt</td>
                      <td>12:30 AM</td>
                    </tr>
                    <tr>
                      <td>Flight7</td>
                      <td>Moroco</td>
                      <td>Egypt</td>
                      <td>12:30 AM</td>
                    </tr>
                    <tr>
                      <td>Flight8</td>
                      <td>Saudi Arabia</td>
                      <td>Egypt</td>
                      <td>12:30 AM</td>
                    </tr>
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

                  <div class="prices pe-4">
                    <p>From <span>EGP 12,300</span></p>
                    <p>To EGP 10,500</p>
                  </div>
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

                  <div class="prices pe-4">
                    <p>From <span>EGP 4,300</span></p>
                    <p>To EGP 3,300</p>
                  </div>
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
                    <p><i class="fa-solid fa-plane"></i> CAIRO</p>
                    <p><i class="fa-solid fa-plane"></i> DUBAI</p>
                  </div>

                  <div class="prices pe-4">
                    <p>From <span>EGP 9,500</span></p>
                    <p>To EGP 8,300</p>
                  </div>
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

                  <div class="prices pe-4">
                    <p>From <span>EGP 8,600</span></p>
                    <p>To EGP 7,500</p>
                  </div>
                  <div class="clear-fix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php   include("./back/footer.php");   ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
