<?php
include ("connection.php");
$s="delete from departments where department_id=".$_GET['id'];
$result=mysqli_query($conn,$s);
header ("location: departmentview.php");