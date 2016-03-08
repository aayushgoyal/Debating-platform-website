<?php
include ("connection.php");
$s="update admin set name= '".$_GET["name"]."' where e_mail='".$_GET["email"]."'";
$result=mysqli_query($conn,$s);
header("location: employeeview.php");
?>
