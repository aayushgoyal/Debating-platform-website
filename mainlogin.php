<?php
include"connection.php";
$x=0;
$s="select * from user";
$result=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($result)){
    if($r[3]==$_POST['email'] && $r[4]==$_POST['pass']){
        $x=1;
    }
}
if($x==1){
    session_start();
    $_SESSION['user']=$_POST['email'];
    header ("location:mainhome.php");
}
else{
    header("location:main.php?q=".$_POST['email']);
}
