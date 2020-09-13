<form action="success.php">
<table style="color:white" align="center" bgcolor="gray" width="50%" border="1">
<tr>
    <th colspan="2" bgcolor="tomato"> Registration Preview </th>
</tr>

<?php
//$uname = $_GET["txtuname"];
//$uname = $_POST["txtuname"];
$uname = $_REQUEST["txtuname"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["txemail"];
$umobile = $_REQUEST["txmobile"];




/*cookies and sessions*/

setcookie("cname",$uname,time()+3600);
setcookie("cpass",$upass,time()+3600);
$_SESSION["smobile"]=$umobile;
$_SESSION["semail"]=$uemail;


echo "<Tr><td> Username : </td><td>". $uname . "</td></tr>";
echo "<Tr><td> Userpassword : </td><td>". $upass . "</td></tr>";
echo "<Tr><td> Useremail : </td><td>". $uemail . "</td></tr>";
echo "<Tr><td> Usermobile : </td><td>". $umobile . "</td></tr>";

?>
<tr>
    <td align="right"> <button type="Submit" > Confirm </button> </td>
    <td> <button type="button" onclick="window.history.back()"> Change/Back </button> </td>
</table>
</form>