<?php
include ("connection.php");
$x=0;
$s="select * from employee";
$r=mysqli_query($conn,$s);
while($e=mysqli_fetch_array($r)){
    if($e[4]==$_POST["user"]){
        $x=1;
    }
}
if($x==0){
    $h="insert into employee VALUES (NULL, '".$_POST["name"]."', ".$_POST["dep"].", '".$_POST["date"]."', '".$_POST["user"]."', '".$_POST["pass"]."')";
    mysqli_query($conn,$h);
    header("location:employeeview.php");
}
else{
    header("location:employeeadd.php?q='.$e[4].'");
}