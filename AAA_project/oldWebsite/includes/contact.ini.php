<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subscribe = $_POST['subscribe'];
    
    $emailTo='info@hypnos-infinitum.co.uk';
    $headers= 'From: '.$emailFrom;
    $txt= "You have received e-mail from ".$name.".\n\n".$message;
    mail($emailTo,$name,$txt,$headers);
    
    header("Location: ../index.php?mailsend");
    
}else {
header("Location: ../index.php?notSend");
} 






















?>