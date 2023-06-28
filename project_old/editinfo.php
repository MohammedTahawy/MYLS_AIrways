<!--  HTML form to get data from user -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
First name<input type="text" name="F_name" value="mohamed" ><br>
Last name<input type="text" name="L_Name" value="tahawy" ><br>
National ID<input type="text" name="Nat_id"value="1" ><br>
Phone<input type="text" name="Phone" value=10><br>
Country<input type="text" name="Country" value="eg"><br>
email<input type="text" name="email" value="abdo"><br>
<input type="submit" value="update"><br>
</form>
<?php
session_start();//start the session to transfer data among pages

//assaing data user entered to the session array
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $_SESSION['Nat_id']=$_POST['Nat_id'];
    $_SESSION['F_name']=$_POST['F_name'];
    $_SESSION['L_Name']=$_POST['L_Name'];
    $_SESSION['Phone']=$_POST['Phone'];
    $_SESSION['Country']=$_POST['Country'];
    $_SESSION['email']=$_POST['email'];

//define variables to save data user entered to use in data base query
    $F_name=$_POST['F_name'];
    $L_Name=$_POST['L_Name'];
    $Phone=$_POST['Phone'];
    $Country=$_POST['Country'];
    $email=$_POST['email'];
    $Nat_id=$_POST['Nat_id'];
// print the data user entered to make sure we have the correct data and there is no problem in catching data from POST form
    echo"<pre>";
    print_r($_SESSION);
    echo"</pre>";
    include("DB_CON.php"); //connect to the data base 
    try//to make sure that SQL run sucessfully
    {
        $update="UPDATE Customers 
        SET 
            F_name=? , L_Name=? , Phone=? , Country=? , email=? 
        WHERE Nat_id = ? ";//the data base SQL update statement
        $stmt=$con->prepare($update); //prepare the SQL statement to execute it 
        $stmt->execute(array(
            $F_name,
            $L_Name,
            $Phone,
            $Country,
            $email,
            $Nat_id
        ));//execute SQL update 
    }
    catch(PDOException $e)
    {
        echo "failed".$e->getMessage();//to trace errors if found
    }
}
?>//BY MT WITH MM HELP

<?php
session_start();
include("DB_CON.php");
try
{
    $delete="DELETE * FROM `Customers` WHERE Nat_id= ?";
    $stmt=$con->prepare($delete);
    $stmt->execute(array($_SESSION['Cust_Data']['Nat_id']));
}
catch(PDOException $e)
{
    echo "failed".$e->getMessage();//to trace errors if found
}


?>