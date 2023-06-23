<?php
session_start();//start the session to transfer data among pages
include("DB_CON.php"); //connect to the data base 
//$Nat_id=$_SESSION['Nat_id'];//get customer national id from session array to use it in SQL query 
$_SESSION['Nat_id']=123123;

try//to make sure that SQL run sucessfully
    {
        $ticketQuery="
        SELECT
            Customers.F_name,
            Customers.L_Name,
            Flights.Flight_iD,
            Flights.Travell_agency,
            Flights.Date,
            Tickets.Class,
            Flights.Source,
            Flights.Destination,
            Flights.Time
        FROM Flights
        JOIN Tickets
        ON Flight = Flights.Flight_iD
        JOIN Customers
        ON Nat_id = Tickets.Cust
        WHERE Customers.Nat_id = ?
        ";//the data base SQL query statement

        $stmt=$con->prepare($ticketQuery);//prepare the SQL statement to execute it
        $stmt->execute(array(
            $_SESSION['Nat_id']
        )
        );
        $TicketInfo=$stmt->fetch(PDO::FETCH_ASSOC);

    }
    catch(PDOException $e)
    {
        echo "failed".$e->getMessage();//to trace errors if found
    }
    echo "<pre>";
    print_r($TicketInfo);
    echo "</pre>";






// try//to make sure that SQL run sucessfully
//     {
//         $customerQuery="SELECT F_name , L_Name FROM Customers WHERE Nat_id=?;";//the data base SQL query statement
//         $stmt=$con->prepare($customerQuery); //prepare the SQL statement to execute it 
//         $stmt->execute(array(
//             $Nat_id
//         ));//execute SQL update 
//         $CustomerNameRow=$stmt->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['F_name']=$CustomerNameRow['F_name'];
//         $_SESSION['L_Name']=$CustomerNameRow['L_Name'];
//         $TicketQuery="SELECT Nat_id FROM Tickets WHERE Cust=?;";//the data base SQL Query statement
//         $stmt=$con->prepare($TicketQuery);
//         $stmt->execute(array(

//         ));

//     }
//     catch(PDOException $e)
//     {
//         echo "failed".$e->getMessage();//to trace errors if found
//     }


?>
