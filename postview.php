<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
</head>
<body>
<?php
include "adminheader.php";
?>
<div id="all">
    <div id="main"><br><center>
            <?php
            include "connection.php";
            $s="select * from post";
            $result=mysqli_query($conn, $s);
            $ans='<table border="1">';
            $ans=$ans.'<tr>';
            $ans=$ans.'<td colspan="4"><h2><center>Post</center></h2>';
            $ans=$ans.'</tr>';
            $ans=$ans.'<tr>';
            $ans=$ans.'<th>ID</th>';
            $ans=$ans.'<th>Heading</th>';
            $ans=$ans.'<th>Edit</th>';
            $ans=$ans.'<th>Delete</th>';
            $ans=$ans.'</tr>';
            while($r=mysqli_fetch_array($result)){
                $ans=$ans.'<tr>';
                $ans=$ans.'<td>'.$r[0].'</td>';
                $ans=$ans.'<td>'.$r[1].'</td>';
                $ans=$ans.'<td><a href="postedit.php?q='.$r[0].'"><img src="images/download.png" width="30" height="30"></a></td>';
                $ans=$ans.'<td><a href="postdelete.php?q='.$r[0].'"><img src="images/download.jpg" width="50" height="30"></a></td>';
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