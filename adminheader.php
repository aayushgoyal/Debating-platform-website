<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="admindesign.css" rel="stylesheet">
	<link rel="icon" href="images/title.png" type="image" sizes="32x32">
    <style>
        a:link {text-decoration: none;}
        a:visited {text-decoration: none;}
        a:hover {text-decoration: none;}
        a:active {text-decoration: #A2CAD8  ;}
    </style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['admin'])){
}
else{
    header ("location:adminlogin.php");
}
include ("connection.php");
$x="select * from admin where e_mail='".$_SESSION['admin']."'";
$result=mysqli_query($conn,$x);
$r=mysqli_fetch_array($result);
?>
<div id="all">
    <div id="header">
        <nav>
            <ul>
                <li><a href="adminhome.php">Home</a></li>
                <li><a href="#">Departments</a>
                <ul>
                    <li><a href="departmentadd.php">Add Department</a></li>
                    <li><a href="departmentview.php">View Department</a></li>
                </ul></li>
                <li><a href="#">Employees</a>
                <ul>
                    <li><a href="employeeadd.php">Add Employee</a></li>
                    <li><a href="employeeview.php">View Employees</a></li>
                </ul></li>
                <li><a href="#">Posts</a>
                <ul>
                    <li><a href="postadd.php">Add Post</a></li>
                    <li><a href="postview.php">View Posts</a></li>
                </ul></li>
                <li><a href="#"><?php echo $r[2]; ?></a>
                <ul>
                    <li><a href="adminchangepassword.php">Change Password</a></li>
                    <li><a href="adminlogout.php">Logout</a></li>
                </ul></li>
            </ul>
        </nav>
    </div><hr>
</div>
</body>
</html>