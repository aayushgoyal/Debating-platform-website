<?php
include ("connection.php");
$s="delete from admin where e_mail='".$_GET["email"]."'";
$result=mysqli_query($conn,$s);
header ("location: employeeview.php");