<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
	<link rel="icon" href="images/title.png" type="image" sizes="32x32">
	<style> img{ float:left;}
</head>
<body>

<?php
include ("adminheader.php");
?><span><img src="images/title.png" alt="logo" width="20%" height="20%"></img>
<div id="all" >
    <div id="left">
		<div id="big_wrapper">
        <?php
        include "connection.php";
        $s="select * from post order by post_id desc";
        $result=mysqli_query($conn,$s);
        $ans='<h3>Latest Debates</h3>';
        for($i=0;$i<7;$i++) {
            $r=mysqli_fetch_array($result);
            $ans.='<ul><li>'.$r[1].'</li></ul>';
        }
        echo $ans;
        ?>
		</div>
    </div>
</div>
</body>
</html>
