<?php

if (isset($_POST['submit'])) {

  require 'dbh.php';


 $firstname = $_POST['First'];
 $lastname = $_POST['Last'];
 $street = $_POST['Street'];
 $city = $_POST['City'];
 $state = $_POST['State'];
 $zip = $_POST['Zip'];
 $country = $_POST['Country'];
 $DOB = $_POST['DOB'];
 $resdate = $_POST['Reservation_date'];
 $restime = $_POST['Reservation_time'];
 $hours = $_POST['Hours'];
 $hphone = $_POST['Home'];
 $cphone = $_POST['Cell'];
 if($_POST['Rental1'] == "on") {
   $rental1 = '1';
 }
 else {
   $rental1 = '0';
 }
 if($_POST['Rental2'] == "on") {
  $rental2 = '1';
}
else {
  $rental2 = '0';
}
if($_POST['Rental3'] == "on"){
  $rental3 = '1';
}
else {
  $rental3 = '0';
}
if($_POST['Rental4'] == "on"){
  $rental4 = '1';
}
else {
  $rental4 = '0';
}
if($_POST['Rental5'] == "on"){
  $rental5 = '1';
}
else {
  $rental5 = '0';
}
if($_POST['Rental6'] == "on"){
  $rental6 = '1';
}
else {
  $rental6 = '0';
}
if($_POST['Rental7'] == "on"){
  $rental7 = '1';
}
else {
  $rental7 = '0';
}
 $Efirstname = $_POST['E_First'];
 $Elastname = $_POST['E_Last'];
 $EWphone = $_POST['E_Work'];
 $EHphone = $_POST['E_Home'];
 $ECphone = $_POST['E_Cell'];
 $textbox = $_POST['textbox'];
 //Emailed submission form
 $to = "sdean@mscok.edu"; // this is your Email address
 $from = "sdean@mscok.edu"; // this is the sender's Email address
 $subject = "Form submission";
 $message = $firstname . " " . $lastname . " submitted the following:";

 $headers = "-f donotreplay@shadyoaksboatrental.com";;
// Error Checking Start
  // Check for Blank Field(s)
   if (empty($firstname) || empty($lastname) || empty($street) || empty($city) || empty($state) || empty($zip) || empty($country) || empty($DOB) || empty($resdate) || empty($restime) || empty($hours) || empty($hphone) ||
   empty($cphone) || empty($Efirstname) || empty($Elastname) || empty($EWphone) || empty($EHphone) || empty($ECphone)) {
     header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
     exit();
     }
        else{
             $sql = "INSERT INTO users (FirstName, LastName, Street, City, State, Zip, Country, DOB, ResDate, ResTime, Hours, HPhone, CPhone, rental1, rental2, rental3, rental4, rental5, rental6, rental7, EFirstName, ELastName, EWPhone, EHPhone, ECPhone, textbox) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $stmt= mysqli_stmt_init($conn);
             if (!mysqli_stmt_prepare($stmt, $sql)) {
            //  printf("Error: %s.\n", mysqli_stmt_error($stmt));
               header("Location: ../signup.php?error=brokensql");
               exit();
             }
             else{
               mysqli_stmt_bind_param($stmt, "sssssssssssssiiiiiiissssss", $firstname, $lastname, $street, $city, $state, $zip, $country, $DOB, $resdate, $restime, $hours, $hphone, $cphone, $rental1, $rental2, $rental3, $rental4, $rental5, $rental6, $rental7, $Efirstname,
                $Elastname, $EWphone, $EHphone, $ECphone, $textbox);
               mysqli_stmt_execute($stmt);
               mail($to,$subject,$message,null,$headers);
              header("Location: ../signup.php?singup=success?rental1=".$rental1);
             }
           }
   mysqli_stmt_close($stmt);
   mysql_close($conn);
 }
else {
  header("Location: ../signup.php");
  exit();
}
