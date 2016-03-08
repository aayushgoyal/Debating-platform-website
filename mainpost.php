<html>
<head>
    <title>Debate</title>
    <link href="mainhome.css" rel="stylesheet">
    <script src="lib/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function(){
            $("#myform").validate();
        })
    </script>
</head>
<body>
<?php
include "connection.php";
include "mainheader.php";
?>
<div id="big_wrapper2">
<?php
$s="select * from post where post_id=".$_GET["q"];
$result=mysqli_query($conn, $s);
$r=mysqli_fetch_array($result);
$ans='<h2 id="main_heading">'.$r[1].'</h2>';

$t="select * from comment".$_GET["q"]." order by likes desc";
$a=mysqli_query($conn, $t);
while($h=mysqli_fetch_array($a)) {
    $ans.= urldecode($h[2]);
    $ans.='<br>';
    $ans.='<br>';
    $ans.='Commented By-: '.$h[3];
    $ans.='<br>';
	$ans.='<ul>';
    $ans.='<li id="support"><a href="mainsupport.php?j='.$_GET["q"].'&k='.$h[1].'" >Support | '.$h[4].'</a></li>';
	$ans.='</ul>';
	$ans.='<hr>';
    $ans.='<br><br>';
}
echo $ans;

$comm='<form action="maincomment.php" method="get">';
$comm.='<table>';
$comm.='<tr><td>';
$comm.='<textarea name="comment" row="10" cols="190" id="text_area"></textarea>';
$comm.='</td>';
$comm.='<td><input type="hidden" name="post" value="'.$_GET["q"].'"></td>';
$comm.='<td><input type="submit" value="Comment" id="submit"></td>';
$comm.='</tr>';
$comm.='</table>';
echo $comm;
?>
<br><br>
</div>
<div id="footer1">
	<img src="images/title.png" id="logo1" alt="IndiaDemand Logo"/>
	<a href="#"><img src="images/facebook.png" id="logo2" alt="IndiaDemand Logo"/></a>&nbsp&nbsp&nbsp
	<a href="#"><img src="images/twitter.png" id="logo2" alt="IndiaDemand Logo"/></a>&nbsp&nbsp&nbsp
	<a href="#"><img src="images/youtube.png" id="logo2" alt="IndiaDemand Logo"/></a>
	</div>
</body>
</html>
