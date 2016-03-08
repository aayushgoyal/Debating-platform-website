<html>
<head>
    <link href="mainhome.css" rel="stylesheet">
    <style>
	#link{
		border:1px solid #00897B;
		margin:3px;
		padding:6px;
	}
	
        a:link{
			text-decoration: none;
			color:black;
			font-style:quicksand;			
			}
        a:visited{
			text-decoration: none;
		    color:black;
			font-style:quicksand;
		}
        #main_header>a:hover{text-decoration: none;
		    color:black;
			font-style:quicksand;
			background-color:#00897B;
			-webkit-transition:0.3s linear;
		}
        a:active{
			text-decoration: #A2CAD8;
		    color:black;
			font-style:quicksand;
		}
		
		#main_header{
			left:72%;
			top:47px;
			position:absolute;
			font-size:17px;
		}
		
		#big_wrapper1{
			width:100%;
			background-color:#009688;
			margin:0px;
			padding:0px;
			top:0%;
			left:0%;
			position:relative;
			-webkit-border-radius:5px;
		}
		#myform{
			top:0px;
			left:5%;
			position:relative;
		}
		#search{
		border:1px solid black;
		-webkit-border-radius:2px;
		width:300px;
		height:35px;
		font-size:17px;
		}
		
		#button{
			height:35px;
			width:90px;
			-webkit-border-radius:2px;
			cursor:pointer;
			border:1px solid #00897B;
		   margin:3px;
		  padding:6px;
		  background-color:#009688;
		}
		#button:hover{
			background-color:#00897B;
			-webkit-transition:0.3s linear;
		}
		#logo{
			width:150px;
			height:60px;
			padding:0;
			margin:0;top:25px;
			position:relative;
		}
    </style>
</head>
<body>
<div id="big_wrapper1">
<?php
session_start();
if(isset($_SESSION['user'])){
}
else{
    header ("location:main.php");
}
include"connection.php";
?>

<span>
<form id="myform" method="get" action="mainsearch.php">
    <input type="search" name="search" id="search" placeholder="Search IndiaDemand">
    <input type="submit" value="Search" id="button" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="mainhome.php"><img src="images/title.png" id="logo" alt="IndiaDemand Logo"/></a>
</form>

<div id="main_header">
<a href="mainhome.php" id="link">Home</a> &nbsp;
<a href="#" id="link">
    <?php
    $s="select * from user where e_mail='".$_SESSION['user']."'";
    $result=mysqli_query($conn, $s);
    $r=mysqli_fetch_array($result);
     ?>
    <?php echo $r[1]." ".$r[2] ?></a></span> &nbsp;
    <a href="mainlogout.php" id="link">Logout</a>
	</div>
	<br>
<hr>
</div>
</body>
</html>