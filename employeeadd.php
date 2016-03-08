<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
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
include ("adminheader.php");
include ("connection.php");
?>
<div id="all">
    <div id="main"><br><center>
        <form action="employeesubmit.php" method="post" id="myform">
            <table>
                <tr><td colspan="2"><center><h3>Add Employee</h3></center></td></tr>
                <tr><td>Employee Name-:</td>
                <td><input type="text" name="name" data-rule-required="true" data-msg-required="*"></td></tr>
                <tr><td>Department-:</td>
                <td><?php
                    $s="select * from departments";
                    $r=mysqli_query($conn,$s);
                    $p='<select name="dep">';
                    while($e=mysqli_fetch_array($r)){
                        $p.='<option value="'.$e[0].'">'.$e[1].'</option>';
                    }
                    $p.='</select>';
                    echo $p;
                    ?></td></tr>
                <tr><td>Date of Joining-:</td>
                <td><input type="date" name="date"></td></tr>
                <tr><td>Username-:</td>
                <td><input type="text" name="user" data-rule-required="true" data-msg-required="*"</td>
                <td><?php
                    if(isset($_GET["q"])){
                        echo ("* Username already exist");
                    }
                    ?></td></tr>
                <tr><td>Password-:</td>
                <td><input type="password" name="pass" data-rule-required="true" data-msg-required="*"></td></tr>
                <tr><td></td>
                <td><input type="submit" value="Submit"></td></tr>
            </table>
        </form></center><br>
    </div>
</div>
</body>
</html>