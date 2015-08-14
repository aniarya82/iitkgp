<?php
$servername = "mysql.1freehosting.com";
$username = "u309141999_root";
$password = "8687917613";
$myDB="u309141999_2";
if (isset($_GET['var'])) {
  $usernam = $_GET['var'];
}else $usernam="admin";
$conn = mysqli_connect($servername, $username, $password,$myDB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else 
{$sql="SELECT *
FROM todo;}
if (mysqli_query($conn, $sql)) {
	$result=mysqli_query($conn,$sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
}


$num=mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {echo "TODO LIST<br>";
while($row = mysqli_fetch_assoc($result)) 
{
    echo '<p>'.$row["HEADING"].'<br>USErNAME:'.$row["USERNAME"].'<br>TITLE:'.$row["TODOPART"].'<br>TODO:'.$row["TODO"].'<br></p>';
}
}else "NO TODO LIST";
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
<div class="container-fluid">
<a href="salphp.php" class="button button-info">LOG OUT</a>
<div class="row">
<p class="alert alert-danger text-center text-justified">ADD NEW EVENT</p>
<form class="form-group-lg" method="POST" action="events.php">

<br>
<br>
<label for="text">HEADING</label>
<input type="text" placeholder="ENTER HEADING" class="form-control" id="addnews1" name="addnews1" required>
<label for="text">IN SHORT</label>
<input type="text" placeholder="ENTER YOUR WORK(in short)" class="form-control" id="addnews2" name="addnews2" required >
<label for="name">FULL DETAILS</label>
<input type="text"  placeholder="ENTER FULL POST" class="form-control" id="addnews3" name="addnews3" required >
<br>
<button type="submit" name="addnews" class="btn btn-danger">ADD</button>
</form>
<script>
</script>
</div>
</div>
</div>


</body>
</html>
