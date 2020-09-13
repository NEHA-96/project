<style>
a{
    color:blue;
    cursor:pointer;
}
</style>
<?php
session_start();
$uname=$upass=$uemail=$umobile = "";
if(isset($_COOKIE["cname"]))
{
        $uname = $_COOKIE["cname"];
}
if(isset($_SESSION["smobile"]))
{
    $umobile = $_SESSION["smobile"];
}
if(isset($_SESSION["semail"]))
{
    $uemail = $_SESSION["semail"];
}
if(isset($_COOKIE["cpass"]))
{
   $upass = $_COOKIE["cpass"];
}

$message = "Dear <B>$uname</b>, <br/> 
you are successfully registered with our website !
your password : <font color='white'> $upass </font> and confirmation 
details you will soon recieve sms on your registered mobile number 
<b>$umobile</b> and confirmation email
on the registered email id: <b>$uemail</b>"; 


$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "abc";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection has problems ".mysqli_connect_error());
}
//echo "<Br/> Database connected successfully"

$sql = "Insert into table1 (username,userpass,useremail,usermobile) 
values ('$uname','$upass','$uemail','$umobile')";

//echo "<Br/> $sql";

if(mysqli_query($conn,$sql)){
    echo $message;
    echo "data stored successfully";
}
else
{
    echo "Error while user registration :". mysqli_error($conn);
    echo "<br/> Please click on back and change the username";
    echo "<a onClick='window.history.back()'> Back </a>";
}

mysqli_close($conn);