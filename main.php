<html>
<head>
    <title>Welcome to IndiaDemand</title>
    <link href="main.css" rel="stylesheet">
    <script src="lib/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function(){
            $("#myform").validate();
        })
    </script>
    <script>
        $(document).ready(function(){
            $("#myform1").validate();
        })
    </script>
</head>
<body>
<div id="all">
    <div id="header">
	<img src="images/title.png" id="logo" alt="IndiaDemand Logo"/>
        <form id="myform" method="post" action="mainlogin.php">
            <table align="right">
                <tr><td>Email</td>
                    <td>Password</td></tr>
                <tr><td><input type="text" name="email" id="textbox1" value="<?php if(isset($_GET['q'])){
                            echo $_GET['q'];
                        }?>" data-rule-required="true" data-msg-required="*"></td>
                    <td><input type="password" id="textbox1" name="pass" data-rule-required="true" data-msg-required="*"></td>
                    <td><input type="submit" id="button1" value="Log In"></td></tr>
                <tr><td><?php
                        if(isset($_GET['q'])){
                            echo "*Check your information";
                        }
                        ?></td></tr>
            </table>
        </form>
    </div>
	
    <div id="right">
        <h1>Sign In</h1>
        <form id="myform1" method="post" action="signin.php">
            <table>
                <tr>
                    <td><input type="text" name="fname" id="textbox" placeholder="first name" data-rule-required="true" data-msg-required="*" value="<?php
                        if(isset($_REQUEST['a'])){
                            echo $_REQUEST['a'];
                        }
                        ?>">
				</td></tr>
				
                <tr>
                    <td><input type="text" name="lname"  id="textbox" placeholder="last name" data-rule-required="true" data-msg-required="*"></td></tr>
                <tr>
                    <td><input type="email" name="email" id="textbox" placeholder="email" data-rule-required="true" data-msg-required="*" value="<?php
                        if(isset($_REQUEST['t'])){
                            echo $_REQUEST['t'];
                        }
                        ?>"></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" id="textbox"  placeholder="password" data-rule-required="true" data-msg-required="*"></td></tr>
                <tr>
                    <td><select name="sex" id="sex">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select></td></tr>
                <tr><td></td>
                    <td><?php
                        if(isset($_REQUEST['t'])){
                            echo "*E-mail id already exits";
                        }
                        ?></td></tr>
						</table>
						<table>
                <tr><td><input type="submit" value="Sign In" id="button"></td></tr>
				<tr><td>
						<?php
						if(isset($_GET['d'])){
							echo "Account created sucessfully!! Please login...";
						}
						?></td></tr>
            </table>
        </form>
    </div>
    
    <div id="main"></div>
</div>
</body>
</html>