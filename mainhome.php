<html>
<head>
<title>IndiaDemand.com</title>
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
<br><br>
<div id="big_wrapper">
<?php
include("mainheader.php");
?>
<div class="slider_image">
<img src="images/debateit1.jpg" class="image"/>
<img src="images/join+debate.png" class="image"/>
<img src="images/speak-up.jpg" class="image"/>
</div>
<h3>Debates</h3>
    <div id="left">
        <?php
        include "connection.php";
        $s="select * from post order by post_id desc";
        $result=mysqli_query($conn,$s);
        $ans='';
        for($i=0;$i<5;$i++) {
            $r=mysqli_fetch_array($result);
                $ans.='<ul id="link_list"><li><a id="links" href="mainpost.php?q='.$r[0].'">'.$r[1].'</a></li></ul>';
        }
        echo $ans;
        ?>
    </div>
	<br>
</div>
<div id="footer1">
	<img src="images/title.png" id="logo1" alt="IndiaDemand Logo"/>
	<a href="#"><img src="images/facebook.png" id="logo2" alt="IndiaDemand Logo"/></a>&nbsp&nbsp&nbsp
	<a href="#"><img src="images/twitter.png" id="logo2" alt="IndiaDemand Logo"/></a>&nbsp&nbsp&nbsp
	<a href="#"><img src="images/youtube.png" id="logo2" alt="IndiaDemand Logo"/></a>
	</div>
</body>
</html>
