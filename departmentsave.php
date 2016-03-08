<?php
include ("connection.php");
$s="update departments set department_name= '".$_GET["name"]."', type='".$_GET["type"]."' where department_id=".$_GET["id"]."";
$result=mysqli_query($conn,$s);
header("location: departmentview.php");
?>
k