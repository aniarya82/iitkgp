<?php

if($_SERVER["REQUEST_METHOD"]="POST")
{
	if(isset($_POST["addnews"]))
	{
$addnews1 = (isset($_POST['addnews1']) ) ? $_POST['addnews1'] : 'admin';
$addnews2 = (isset($_POST['addnews2']) ) ? $_POST['addnews2'] : '';
$addnews3 = (isset($_POST['addnews3']) ) ? $_POST['addnews3'] : 'admin';
$usernam = (isset($_POST['form1']) ) ? $_POST['form1'] : 'admin';
$servername = "mysql.1freehosting.com";
$username = "u309141999_root";
$password = "8687917613";
$myDB="u309141999_2";
$conn = mysqli_connect($servername, $username, $password,$myDB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO todo (HEADING,TODOPART,TODO,USERNAME) VALUES ('$addnews1','$addnews2','$addnews3','$usernam')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('INSERTED');</script>";
    include("salheader.php");
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}
}


}
?>
