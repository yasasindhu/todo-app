<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_Files/fullwidth.css">
    <?php
    include("nav.php");
    ?>

<?php
$mysqli=new mysqli("localhost","root","","todoapplication");
error_reporting(0);
$user_id=$_GET['user_id'];
$list_id=$_GET['list_id'];
echo "$list_id";
$user_name=$_GET['user_name'];
echo "$user_name";
$query="Delete from list where list_id=$list_id";
$data=mysqli_query($mysqli,$query);
//$totalrows=mysqli_num_rows($data);
if($data)
{
  //echo "<font color='green'>deleted successfully";
echo "<script>alert('record deleted')</script>";

  echo "<td><a href='dislaylist.php?user_id=$user_id&list_id=$result[list_id]&user_name=$user_name'><h1><center>Click here to view remaining lists</center></h1></a></td>";
}
else {
  echo "<font color='red'>Sorry delete process failed";
}


 ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
    <script src=js/bootstrap.min.js"></script>
    </body>
    </html>
