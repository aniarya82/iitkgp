<?php
$servername = "mysql.1freehosting.com";
$username = "u309141999_root";
$password = "8687917613";
$myDB="u309141999_2";
if($_SERVER["REQUEST_METHOD"]="POST")
{
$usernam = (isset($_POST['form1']) ) ? $_POST['form1'] : 'admin';
$passwd = (isset($_POST['form2']) ) ? $_POST['form2'] : '';
}

$conn = mysqli_connect($servername, $username, $password,$myDB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT USERNAME,PASSWORD from signup where PASSWORD='$passwd' AND USERNAME='$usernam'";
if (mysqli_query($conn, $sql)) {
    $result=mysqli_query($conn,$sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
}
$rows = mysqli_num_rows($result);
if ($rows == 1) {
	session_start();
	echo "<p class='alert alert-danger text-center'>WELCOME :$usernam</p>";
$_SESSION['user']=$usernam; 
$_SESSION['pass']=$passwd; 
include ("salheader.php");
} else {
$error = "Username or Password is invalid";
echo "<p class='alert alert-danger'>'$error'</p>";

}
?>
