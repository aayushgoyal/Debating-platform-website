<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from departments WHERE department_id=".$_GET['q'];
$res=mysqli_query($conn,$s);
$r=mysqli_fetch_array($res);
?>
<div id="all">
    <div id="main"><br>
        <center>
        <form action="departmentremove.php" method="get">
            <table>
                <tr><td colspan="2"><h2><center>Remove</center></h2></td></tr>
                <tr><td>Department ID-:</td>
                    <td><input type="text" name="id" readonly value='<?php echo $r[0]; ?>'></td></tr>
                <tr><td>Department:</td>
                <td><input type="text" name="dep" readonly value="<?php echo $r[1]?>"></td></tr>
                <tr><td>Type:</td>
                <td><select>
                        <option><?php echo $r[2]; ?></option>
                    </select></td></tr>
                <tr><td></td>
                    <td><input type="submit" value="Remove"></td></tr>
            </table>
        </form>
        </center>
    </div>
</div>
</body>
</html>