<?php
include "connection.php";
$e="select * from user";
$res=mysqli_query($conn,$e);
$x=0;
while($p=mysqli_fetch_array($res)){
    if($p[3]==$_POST['email']){
     $x=1;
    }
}
if($x==0){
    session_start();
    $s="insert into user VALUES(NULL, '".$_POST['fname']."', '".$_POST['lname']."','".$_POST['email']."', '".$_POST['pass']."', '".$_POST['sex']."')";
    mysqli_query($conn,$s);
	header("location: main.php?d=1");
}
else{
    header ("location:signin.php?t=".$_POST['email']);
}
?>