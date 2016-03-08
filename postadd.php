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
?>
<div id="all">
    <div id="main"><br><center>
            <form id="myform" action="postsubmit.php" method="get">
                <table>
                    <tr><td><center><h2>Add Post</h2></center></td></tr>
                    <tr><td><input id="input" name="post" type="text" data-rule-required="true" data-msg-required=" *" placeholder="Heading"></td></tr>
                    <tr></tr>
                    <tr><td><center><input type="submit" value="Post" id="submit"></center></td></tr>
                </table>
            </form>
    </center></div>
</div>
</body>
</html>