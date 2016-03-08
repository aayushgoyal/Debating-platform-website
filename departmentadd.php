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
<div id="main"><br><center>
        <form action="departmentsubmit.php" id="myform" method="get">
            <table>
                <tr><td colspan="2"><h2><center>Add Department</center></h2>
                    </td></tr>
                <tr>
                    <td>Enter Department-:</td>
                    <td><input type="text" name="dep" data-rule-required="true" data-msg-required="*">
                    </td>
                </tr>
                <tr>
                    <td>Department Type-:</td>
                    <td><select name="type" data-rule-required="true" data-msg-required="*">
                            <option value="Regional">Regional</option>
                            <option value="State">State</option>sub
                            <option value="Central">Central</option>
                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form></center><br>
</div>
</body>
</html>