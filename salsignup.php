<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
  $nam = $_POST["name"];
  $email =$_POST["email"];
  $usernam =$_POST["username"];
  $passwd =$_POST["password"];
  $nam= trim($nam);
    $usernam= trim($usernam);
      $passwd= trim($passwd);

  $nam = htmlspecialchars($nam);
    $email = htmlspecialchars($email);
      $usernam = htmlspecialchars($usernam);
        $nam = htmlspecialchars($nam);
        
  $emailerror="ENTER VALID EMAIL";
  $passworderror="PASSWORD DIDN'T MATCH";

$repeatpassword=$_POST["repeatpassword"];

  if(!filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE)
  {
    $emailval=$email;
  }
  else echo "<p class='alert alert-danger'>$emailerror</p>";
  if($passwd==$repeatpassword)
  {
   $passwordval=$passwd; 
  }else echo "<p class='alert alert-danger'>$passworderror</p>";


if($emailval==$email&&$passwordval=$passwd)
{
$servername = "mysql.1freehosting.com";
$username = "u309141999_root";
$password = "8687917613";
$myDB="u309141999_2";
$conn = mysqli_connect($servername, $username, $password,$myDB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT EMAIL,USERNAME FROM signup WHERE EMAIL='$email' or USERNAME='$usernam' ";
if (mysqli_query($conn, $sql)) {
    $result=mysqli_query($conn,$sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
}


$num=mysqli_num_rows($result);
if($num=="0")
{
$sql="INSERT INTO signup"."(NAME,EMAIL,USERNAME, PASSWORD)"." VALUES ('$nam','$emailval','$usernam','$passwordval')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('YOUR ACCOUNT HAS BEEN CREATED SUCCESSFULLY LOGIN NOW');</script>";
    @ include_once ('salphp.php');
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}


}else echo "<p class='alert alert-danger'>ALREADY REGISTERED</p>";

mysqli_close($conn);

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY BLOG</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style type="text/css">

   body {background-color:#7E8F7C;}
 </style>
</head>
<body>
<a href="salphp.php" id="a" ><span class="glyphicon glyphicon-home"></span>HOME</a>
<div id="chang1">
<div class="row">
<div class="col-md-offset-4 col-md-4">
<form class="form-group" id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br>
<br>
<div class="alert alert-success">SIGN UP</div>
<label for="email">EMail</label>
<input type="text" placeholder="ENTER EMAIL" class="form-control" id="form1" name="email" required>
<label for="username">USer NAme</label>
<input type="text" placeholder="ENTER USERNAME" class="form-control" id="form2" name="username" required >
<label for="name">NAme</label>
<input type="text" placeholder="ENTER NAME" class="form-control" id="form3" name="name" required >
<label for="name">PASSword</label>
<input type="password" placeholder="ENTER PASSWORD" class="form-control" id="form4" name="password" required>
<label for="name">CONfirm PASSword</label>
<input type="password" placeholder="ENTER PASSWORD" class="form-control" id="form5" name="repeatpassword" required>
<br>
<button type="submit" id="buttonsignup" class="btn btn-danger">SIgn Up</button>
</form>
</div>
</div>
</div>

</body>
</html>
