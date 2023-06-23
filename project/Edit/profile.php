<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/editStyle.css">
        <title>Profile</title>
        
    </head>
    <body>

 


        <div class="profile-page">
            <div class="edit-profile">
                <div class="profile-pic">
                    <div class="profile-picture">
                        <img class="pic" id="photo" src="imgs/profile.jfif" alt="">
                        <input type="file" id="file"> 
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
      
        <iframe src="" frameborder="0" name="ttt" style="display:none;"></iframe>
        
    </body>
</html>