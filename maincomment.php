<?php
session_start();
include "connection.php";
$t="select * from user where e_mail='".$_SESSION['user']."'";
$result=mysqli_query($conn, $t);
$r=mysqli_fetch_array($result);
$a=$r[1]." ".$r[2];

$s="insert into comment".$_GET["post"]." values (".$_GET["post"].", null, '".urlencode($_GET["comment"])."', '".$a."', 0)";
mysqli_query($conn, $s);

header("location: mainpost.php?q=".$_GET["post"]);