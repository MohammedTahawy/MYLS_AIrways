<?php     
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="css/proStyle.css" />
    <title>Profile</title>
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
                  <a class="nav-link" aria-current="page" href="../mainpg.php"
                    >HOME</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../mainpg.php#offers">OFFERS</a>
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="../mainpg.php#contact"
                    >CONTACT US</a
                  >
                </li>

                <!-- <li class="nav-item nav-active">
                  <a class="nav-link" href="../Login/login.html">LOGIN</a>
                </li>
                <li class="nav-item nav-active">
                  <a class="nav-link" href="../signup/signup.html">REGISTER</a>
                </li> -->

                <li class="nav-item nav-active">
                  <a
                    class="nav-link"
                    href="../manage tickets/manage tickets.php"
                    >MANAGE</a
                  >
                </li>

                <li class="nav-item nav-active">
                  <a class="nav-link" href="#">EDIT INFO</a>
                </li>
              </ul>
              <form action="../back/logout.php "method="POST">
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

    <div class="overlay">
      <div class="profile-page">
        <div class="edit-profile">
          <div class="profile-pic">
            <div class="profile-picture">
              <img class="pic" id="photo" src="imgs/profile.jfif" alt="" />
              <input type="file" id="file" />
              <label for="file" id="uploadpic">Choose Photo</label>
            </div>
          </div>
          <!--user information-->
          <form class="info" action="../back/editinfo.php" method="post" target="ttt">
                    <!--general information-->
                    <div class="box">
                        <h4>General Information</h4>
                        <div>
                            <label for="fname">First Name:</label>
                            <input type="text" id="fname" name="F_name" placeholder=<?php echo $_SESSION['Cust_Data']['F_name'];?> >
                        </div>
                        <div>
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" name="L_Name" placeholder=<?php echo $_SESSION['Cust_Data']['L_Name'];?>>
                        </div>
                        <div>
                            <label for="country">Country</label>
                            <input type="text" id="country" name="Country" placeholder=<?php echo $_SESSION['Cust_Data']['Country'];?>>
                        </div>
                    </div>
                    <!--personal information-->
                    <div class="box">
                        <h4>Personal Information</h4>
                        <div>
                            <label for="id">National ID:</label>
                            <label for="id" style="color:#07acc6;"> <?php echo $_SESSION['Cust_Data']['Nat_id'];?></label>
                        </div>
                        <div>
                            <label for="phone">Phone Number:</label>
                            <input type="text" id="phone" name="Phone" placeholder=<?php echo $_SESSION['Cust_Data']['Phone'];?>>
                        </div>
                        <div>
                            <label for="email" >Email:</label>
                            <input type="email" id="email" name="email" placeholder=<?php echo $_SESSION['Cust_Data']['email'];?>>
                        </div>
                    </div>
                    <!--payment information-->
                    
                    <!--manage-->
                    <div  id="box4">
                        <h4>Manage Account</h4>
                        <div>
                        <input id="bttn" type="submit" value="Edit profile">
                        </div>
                        </form>
                        <form action="../back/Delete_ACC.php" method="post"  >
                        <div id="bttn2">
                            <input id="bttn" type="submit" value="Delete Account" >
                            </form>
                        </div>
                    </div>
        </div>
      </div>
    </div>
    <!-- <div class="overlay">
      <div class="profile-page">
        <div class="edit-profile">
          <div class="profile-pic">
            <div class="profile-picture">
              <img class="pic" id="photo" src="imgs/profile.jfif" alt="" />
              <input type="file" id="file" />
              <label for="file" id="uploadpic">Choose Photo</label>
            </div>
          </div>
          
          <form class="info">
            
            <div class="box">
              <h4>General Information</h4>
              <div>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Lina" />
              </div>
              <div>
                <label for="lname">Last Name:</label>
                <input
                  type="text"
                  id="lname"
                  name="lname"
                  placeholder="Gamal"
                />
              </div>
              <div>
                <label for="country">Country</label>
                <input
                  type="text"
                  id="country"
                  name="country"
                  placeholder="Egypt"
                />
              </div>
            </div>
         
            <div class="box">
              <h4>Personal Information</h4>
              <div>
                <label for="id">National ID:</label>
                <input
                  type="text"
                  id="id"
                  name="id"
                  placeholder="4381659473546"
                />
              </div>
              <div>
                <label for="phone">Phone Number:</label>
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  placeholder="653757345"
                />
              </div>
              <div>
                <label for="email">Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="lina@gmail.com"
                />
              </div>
            </div>

            <div id="box4">
              <h4>Manage Account</h4>
              <div>
                <input
                  id="bttn"
                  type="button"
                  value="Edit profile"
                  onclick=""
                />
              </div>
              <div id="bttn2">
                <input
                  id="bttn"
                  type="button"
                  value="Delete Account"
                  onclick=""
                />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> -->
<iframe name="ttt" style="display : none;"></iframe>
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
