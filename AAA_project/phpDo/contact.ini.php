<?php
if (isset($_POST['submit'])){
    include_once("../database/connect.db.php");
    $name = $_POST['customerName'];
    $emailFrom = $_POST['customerEmail'];
    $message = $_POST['customerMessage'];
    $subscribe = $_POST['subscribe'];
    if($subscribe == true){
    
        //$sql = "SELECT * FROM email_list WHERE email='$customerEmail';";
        //$result= mysqli_query($conn,$sql);
        //$resultCheck = mysqli_num_rows($result);
        //if($resultCheck = 0){
            $sql = "INSERT INTO email_list(email) VALUES '$customerEmail';";
            mysqli_query($conn,$sql);
        //}
    }
    $subscribeText = "press miss";
    if($subscribe == true){
        $subscribeText = "And they want subscribe";
    }
    $emailTo='info@hypnos-infinitum.co.uk';
    $headers= 'From: '.$emailFrom;
    $txt= "You have received e-mail from ".$name.".\n\n".$message."\n\n\n".$subscribeText;
    mail($emailTo,$name,$txt,$headers);
    
    header("Location: ../index.php?mailsend=true");
    
}else {
header("Location: ../index.php?mailsend=false");
} 






















?>