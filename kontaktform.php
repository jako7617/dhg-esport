<?php
$host="byjakob.dk.mysql";
$user="byjakob_dkjakob_dk";
$password="123456";
$db="byjakob_dkjakob_dk";

// Create connection
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "jakoblarsen@byjakob.dk";
    $headers = "From: ".$mailFrom;
    $txt = "Du har modtaget en e-mail fra ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: kontakt.html?mailsend");
      
  }
  
  $sqli="INSERT INTO 'tblcontact' (contact_id,user_name,user_email,subject,content) VALUES('$name','$mailFrom','$subject','$message')";
  $result = mysqli_query($conn, $sqli);
  
  /*
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $message = $_POST['message'];
    $mailFrom = $_POST['email'];

    $mailTo = "jakoblarsen@byjakob.dk";
    $headers = "From: ".$mailFrom;
    $txt = "Du har fået en e-mail fra ".$fname.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: kontakt.php?mailsend");
    mysqli_connect($host,$user,$password);
mysqli_select_db($db);
} */