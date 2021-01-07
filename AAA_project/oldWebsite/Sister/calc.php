<?php
    $ut1ves1x=$_POST['ut1ves1x'];
    $ut1ves1y=$_POST['ut1ves1y'];
    $ut1ves2x=$_POST['ut1ves2x'];
    $ut1ves2y=$_POST['ut1ves2y'];
if( empty($ut1ves1x) || empty($ut1ves1y) || empty($ut1ves2x) || empty($ut1ves2y) ){
    header("Location: index.php?missingInformace");
}else{
    $distX = $ut1ves2x- $ut1ves1x;
    $distY = $ut1ves2y- $ut1ves1y;
    $distX2 = $distX*$distX;
    $distY2 = $distY*$distY;
    $result=sqrt($distX2 + $distY2)*35;
    $hour= floor($result/60);
    $minute= $result % 60;
    $time= $hour."h and ".$minute."m";
    header("Location: index.php?timeut1=".$time."&ut1ves1x=".$ut1ves1x."&ut1ves1y=".$ut1ves1y."&ut1ves2x=".$ut1ves2x."&ut1ves2y=".$ut1ves2y);
}




