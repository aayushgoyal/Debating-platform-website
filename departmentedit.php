<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from departments where department_id=".$_GET["q"];
$d=mysqli_query($conn,$s);
$r=mysqli_fetch_array($d);
?>
<div id="main"><br>
        <center><form action="departmentsave.php" method="get" id="myform">
                <table>
                    <tr><td colspan="2"><h2><center>Edit</center></h2></td></tr>
                    <tr>
                        <td>Department ID-:</td>
                        <td><input type="text" name="id" readonly value='<?php echo $r[0]; ?>'></td>
                    </tr>
                    <tr>
                        <td>Enter Department Name-:</td>
                        <td><input type="text" name="name" value="<?php echo $r[1]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Department Under-:</td>
                        <td><select name="type" value="<?php echo $r[2]; ?>">
                                <?php
                                if($r[2]=="Regional")
                                {
                                    ?>
                                <option value="Regional" seleted>Regional</option>
                                <option value="State">State</option>
                                <option value="Central">Central</option>
                                <?php
                                }
                                elseif($r[2]=="State")
                                {
                                    ?>
                                    <option value="Regional">Regional</option>
                                    <option value="State" selected>State</option>
                                    <option value="Central">Central</option>
                                    <?php
                                }

                                else
                                {
                                    ?>
                                    <option value="Regional">Regional</option>
                                    <option value="State">State</option>
                                    <option value="Central" selected>Central</option>
                                <?php
                                }
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Save"></td>
                    </tr>
                </table>

        </form>
        </center><br>
</div>
</body>
</html>