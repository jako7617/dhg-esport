<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['lname'];

    $mailTo = "jakoblarsen10000@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Du har fået en e-mail fra ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: kontakt.html?mailsend");

}