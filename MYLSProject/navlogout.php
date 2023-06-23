<?php
echo'




<nav class="navbar navbar-expand-lg position-fixed top-0 end-0 start-0">
      <div class="container">
        <img class="logo" src="/MYLS Project/img/logo.png" alt="" />
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
                  <a class="nav-link" aria-current="page" href="../mainpg.php">HOME</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="./mainpg.php#offers">OFFERS</a>
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
                  <a class="nav-link" href="manage tickets/manage tickets.html"
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
                  type="button"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
';
?>