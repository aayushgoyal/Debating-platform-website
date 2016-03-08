<?php
include ("connection.php");
$s="insert into departments VALUES (NULL, '".$_GET["dep"]."', '".$_GET["type"]."')";
$result=mysqli_query($conn,$s);
header ("location: departmentview.php");
?>
