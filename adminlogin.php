<html>
<head>
    <link href="admindesign.css" rel="stylesheet">
	<link rel="icon" href="images/title.png" type="image" sizes="32x32">
    <script src="lib/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function(){
            $("#myform").validate();
        })
    </script>


</head>
<body>
<div id="all">
	<div id="back">
    <div id="main"><br>
        <form action="adminaccount.php" method="post" id="mf">
                <table><tr><td><h2><center>Admin Login</center></h2></td></tr>
                    <tr><td>Enter e-mail-:</td>
                    <td><input id="tbox" type="email" name="email" data-rule-required="true" data-msg-required="*" value="<?php if(isset($_GET["er"])){ echo $_GET["er"]; }?>"></td></tr>
                    <tr><td>Enter Password-:</td>
                    <td><input id="tbox" type="password" name="pass" data-rule-required="true" data-msg-required="*"></td></tr>
                    <tr><td>Enter Type-:</td>
                        <td><select name="type" data-rule-required="true" data-msg-required="*">
                                <option value="Admin">Admin</option>
                                <option value="Employee">Employee</option>
                            </select></td></tr>
                    <tr><td></td>
                    <td><input id="tbox" type="submit" value="login"></td></tr>
                </table>
                <?php
                if(isset($_GET["er"])){
                    echo ("*Please check your information");
                }
                ?>

            </form><br>
    </div>
	</div>
</div>
</body>
</html>
