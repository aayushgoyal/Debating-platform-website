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
        $s="select * from departments";
        $result=mysqli_query($conn,$s);
        $ans='<table border="1">';
        $ans=$ans.'<tr>';
        $ans=$ans.'<td colspan="6"><h2><center>Departments</center></h2></td>';
        $ans=$ans.'</tr>';
        $ans=$ans.'<tr>';
        $ans=$ans.'<th>Department_ID</th>';
        $ans=$ans.'<th>Department Name</th>';
        $ans=$ans.'<th>Department Type</th>';
        $ans=$ans.'<th>Edit</th>';
        $ans=$ans.'<th>Delete</th>';
        $ans=$ans.'</tr>';
        while($r=mysqli_fetch_array($result)){
            $ans=$ans.'<tr>';
            $ans=$ans.'<td>'.$r[0].'</td>';
            $ans=$ans.'<td>'.$r[1].'</td>';
            $ans=$ans.'<td>'.$r[2].'</td>';
            $ans=$ans.'<td><a href="departmentedit.php?q='.$r[0].'"><img src="images/download.png" width="30" height="30"></a></td>';
            $ans=$ans.'<td><a href="departmentdelete.php?q='.$r[0].'"><img src="images/download.jpg" width="50" height="30"></a></td>';
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
