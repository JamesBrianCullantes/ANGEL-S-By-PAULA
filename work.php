<?php
if (isset($_POST['Send Your Order'])){
    $name = $_POST['Your Name'];
    $purchase = $_POST['Number Of Purchase'];
    $email = $_POST['Your Email'];
    $age = $_POST['Your Age'];
    $number = $_POST['Your Contact Number'];
    $address = $_POST['Your Address'];

    $mailTo = "somethingexperiment@gmail.com";
    $headers = "From: ".$mailForm;
    $txt = "You have received en e-mail from". $name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: product1.html?mailsend")
}