<?php
include ("connection.php");
$s="select * from admin";
$d=mysqli_query($conn,$s);
$x=0;
while($r=mysqli_fetch_array($d)){
    if($r[0]==$_POST["email"]&&$r[1]==$_POST["pass"]){
     $x=1;
    }
}
if($x==1){
    $p="update admin set password= '".$_POST["pass1"]."' where e_mail= '".$_POST["email"]."'";
    mysqli_query($conn,$p);
    header ("location: adminchangepassword.php?q=1");
}
else{
    header ("location: adminchangepassword.php?e=1");
}
