<?php
include ("connection.php");
$s="insert into post VALUES (NULL, '".$_GET['post']."')";
mysqli_query($conn, $s);

$z="select * from post order by post_id desc";
$result=mysqli_query($conn,$z);
$r=mysqli_fetch_array($result);

$t="create table comment".$r[0]."(post_id int, comment_id int primary key auto_increment, comment_desp longtext, commentor varchar(20),likes int)";
mysqli_query($conn,$t);

header("location: postview.php");
?>


