<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css_Files/fullwidth.css">
    <link rel="stylesheet" type="text/css" href="style.css">
<?php
include("nav.php");
?>
<body>
  <div class="row backgroundimg">
 <div class="container">
<div class="login-box">
<form action="" method="POST">
list_name:<input type="Text" name="list_name" value=" "><br>
Due_date:<input type="date" name="list_date" <br>
<input type="submit"  name="submit" value="submit"><br>
</form>
</div>
<?php
$mysqli=new mysqli("localhost","root","","todoapplication");
error_reporting(0);
$user_id=$_GET['user_id'];
//echo "$user_id";
$user_name=$_GET['user_name'];
//echo "$user_name";

 if($_POST["submit"])
 {
   $list_name=$_POST["list_name"];
   $list_date=$_POST["list_date"];
   $result=explode('-',$list_date);
   $date=$result[2];
   $month=$result[1];
   $year=$result[0];
    $new=$year.'-'.$month.'-'.$date;
   $user_id=$_GET['user_id'];
   if($list_name!=" "){
  //   echo "yes";
$query="INSERT INTO list VALUES ('','$list_name','$new','$user_id')";
$data=mysqli_query($mysqli,$query);
//echo "no";
if($data)
{
  echo "<font color='green'>updated successfully<a href='displaylist.php?user_id=$user_id&user_name=$user_name' class='btn btn-info' role='button'>Check updated list</a>";
}
else {
  echo "<font color='red'>not updated.<a href='#' class='btn btn-info' role='button'>Check updated list</a>";
}
 }
 else {
   echo "<font color='blue'>Click on update button to save changes";
 }

}?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
    <script src=js/bootstrap.min.js"></script>
  </body>
</html>
