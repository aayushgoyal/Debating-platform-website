<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
</head>
<body>
<?php
include ("adminheader.php");
?>
<div id="all">
    <div id="main"><br><center>
        <?php
        include ("connection.php");
        $s="select * from employee";
        $result=mysqli_query($conn, $s);
        $ans='<table border="1">';
        $ans=$ans.'<tr>';
        $ans=$ans.'<td colspan="6"><h2><center>Employees</center></h2></td>';
        $ans=$ans.'</tr>';
        $ans=$ans.'<tr>';
        $ans=$ans.'<th>Name</th>';
        $ans=$ans.'<th>Department</th>';
        $ans=$ans.'<th>DOJ</th>';
        $ans=$ans.'<th>Username</th>';
        $ans=$ans.'<th>Edit</th>';
        $ans=$ans.'<th>Delete</th>';
        $ans=$ans.'</tr>';
        while($r=mysqli_fetch_array($result)){
            $ans=$ans.'<tr>';
            $ans=$ans.'<td>'.$r[1].'</td>';
            $w="select * from departments WHERE department_id=".$r[2];
            $h=mysqli_query($conn,$w);
            $j=mysqli_fetch_array($h);
            $ans=$ans.'<td>'.$j[1].'</td>';
            $ans=$ans.'<td>'.$r[3].'</td>';
            $ans=$ans.'<td>'.$r[4].'</td>';
            $ans=$ans.'<td><a href="employeeedit.php?q='.$r[0].'"><img src="images/download.png" width="30" height="30"></a></td>';
            $ans=$ans.'<td><a href="employeedelete.php?q='.$r[0].'"><img src="images/download.jpg" width="50" height="30"></a></td>';
            $ans=$ans.'</tr>';
        }
        $ans=$ans.'</table>';
        echo $ans;
        ?>
        <br></center>
    </div>
</div>
</body>
</html>

