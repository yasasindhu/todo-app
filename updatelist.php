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
<div class="log-box">
<form action="" method="POST">
list_name:<input type="Text" name="list_name" value=""/><br>
<input type="submit"  name="submit" value="submit"><br>
</form>
</div>
<?php
$mysqli=new mysqli("localhost","root","","todoapplication");
error_reporting(0);
$user_id=$_GET['user_id'];
//echo "$user_id";
$list_id=$_GET['list_id'];
//echo "$list_id";
$user_name=$_GET['user_name'];
//echo "$user_name";


if($_POST["submit"])
 {
   $list_name=$_POST["list_name"];
   if($list_name!=""){
     //echo "yes";
$query="update list set list_name='$list_name' where list_id=$list_id";
$data=mysqli_query($mysqli,$query);

if($data)
{
  echo "<font color='green'>updated successfully<a href='displaylist.php?user_id=$user_id&user_name=$user_name'>Check updated list</a>";
}
else {
  echo "<font color='red'>not updated.<a href='display.php'>Check updated list</a>";
}
 }
 else {
   echo "<font color='blue'>Click on update button to save changes";
 }

}


 ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
    <script src=js/bootstrap.min.js"></script>
    </body>
    </html>
