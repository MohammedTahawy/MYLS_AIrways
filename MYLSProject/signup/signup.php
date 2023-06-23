<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/W3Schools_2020_2.svg" />
    <title>MYLS Airways</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="css/signup.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg position-fixed top-0 end-0 start-0">
      <div class="container">
        <img class="logo" src="logo.png" alt="" />
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
                  <a class="nav-link" aria-current="page" href="../index.php"
                    >HOME</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../index.php#offers">OFFERS</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../index.php#contact"
                    >CONTACT US</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="#">REGISTER</a>
                </li>

                <!-- <li class="nav-item nav-active">
                  <a
                    class="nav-link"
                    href="../manage tickets/manage tickets.html"
                    >MANAGE</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../Edit/profile.html">EDIT INFO</a>
                </li> -->
              </ul>
              <!-- <form action="">
                <input
                  class="btn btn-outline-danger btn-nav"
                  value="LOG OUT"
                  type="button"
                />
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="overlay"></div>
    <div class="formContent">
      <img src="Screenshot 2022-12-20 at 4.55.26 PM.png" class="avatarImg" />
      <h2>SIGN UP</h2>
      <form class="mt-4" action="../back/register.php" method="POST">
        <div class="name">
          <div>
            <label class="E-P">First Name</label>
            <input
              type="text"
              name="F_name"
              placeholder="First Name"
              required
              class="input_style"
            />
          </div>
          <div class="lastname">
            <label class="E-P">Last Name</label>
            <input
              type="text"
              name="L_Name"
              placeholder="Last Name"
              required
              class="input_style"
            />
          </div>
        </div>
        <label class="E-P">National ID</label>
        <input
          type="text"
          name="Nat_id"
          placeholder="National ID"
          required
          class="input_style"
        />
        <label class="E-P">Email</label>
        <input
          type="text"
          name="email"
          placeholder="Enter Email"
          required
          class="input_style"
        />
        <label class="E-P">Phone number</label>
        <input
          type="text"
          name="phone"
          placeholder="Phone number"
          required
          class="input_style"
        />
        <label class="E-P">Password</label>
        <input
          type="text"
          name="password"
          placeholder="Enter Password"
          required
          class="input_style"
        />
        <label class="E-P">Country</label>
        <input
          type="text"
          name="Country"
          placeholder="Country"
          required
          class="input_style"
        />
        <input
          type="submit"
          name="submit"
          value="SignUp"
          class="b-signup mt-4"
        />
      </form>
    </div>
<iframe style="display: none;" target = "ttt"></iframe>
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