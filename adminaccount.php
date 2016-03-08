<?php
$s="select* from admin";
include "connection.php";
$result=mysqli_query($conn,$s);
$x=0;
while($r=mysqli_fetch_array($result)) {
    if ($r[0] == $_POST["email"] && $r[1] == $_POST["pass"] && $r[3] == $_POST["type"]) {
        $x = 1;
    }
}
if($x==1){
    session_start();
    $_SESSION['admin']=$_POST["email"];
    header ("location: adminhome.php");
}
else{
    header("location: adminlogin.php?er=".$_POST["email"]."");
}


