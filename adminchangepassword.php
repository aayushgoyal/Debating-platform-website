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
        <form action="adminpassword.php" method="post">
            <table>
                <tr><td colspan="2"><h2><center>Change Password</center></h2></td></tr>
                <tr><td>E-mail-:</td>
                <td><input type="email" name="email" value="<?php echo $_SESSION['admin'] ?>" readonly></td></tr>
                <tr><td>Enter Current Password-:</td>
                <td><input type="password" name="pass"></td></tr>
                <tr><td>Enter New Password-:</td>
                    <td><input type="password" name="pass1"></td></tr>
                <tr><td></td>
                    <td>
                        <?php
                        if (isset($_GET["q"])){
                            echo "Password changed";
                        }
                        ?>
                    </td></tr>
                <tr><td></td>
                <td><input type="submit" value="Submit"></td></tr>

            </table>
            <?php
            if(isset($_GET["e"])){
                echo ("*Please check your information");
            }
            ?>
        </form>
        </center></div>
</div>
</body>
</html>