<?php
$s="select * from comment".$_GET["j"]." where comment_id=".$_GET["k"];
include "connection.php";
$result=mysqli_query($conn, $s);
$r=mysqli_fetch_array($result);
$r[4]=$r[4]+1;

$z="update comment".$_GET["j"]." set likes=".$r[4]." where comment_id=".$_GET["k"];
mysqli_query($conn, $z);

header("location: mainpost.php?q=".$_GET["j"]);
?>