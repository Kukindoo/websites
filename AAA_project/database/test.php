<?php
include_once("connect.db.php");
$sql ="SELECT * FROM email_list";
mysqli_query($conn,$sql);