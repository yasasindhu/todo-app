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
    <body>
      <div class="row backgroundimg">
     <div class="container">
    <div class="log-box">
<form action="" method="POST">
task_name:<input type="Text" name="task_name" value=" "/><br>
<input type="submit"  name="submit" value="submit"><br>
</form>
</div>

<?php
$mysqli=new mysqli("localhost","root","","todoapplication");
error_reporting(0);
//$user_id=$_GET['user_id'];
//echo "$user_id";
$list_id=$_GET['list_id'];
//echo "$list_id";
$user_name=$_GET['user_name'];
//echo "$user_name";

 if($_POST["submit"])
 {
   $task_name=$_POST["task_name"];
  // $user_id=$_GET['user_id'];
   if($task_name!=" "){
$query="INSERT INTO task VALUES ('','$task_name','$list_id')";
$data=mysqli_query($mysqli,$query);
if($data)
{
  echo "<font color='green'>updated successfully<a href='displaytask.php?user_name=$user_name&list_id=$list_id'  class='btn btn-primary' role='button'>Check updated list</a></br>";
}
else {
  echo "<font color='red'>not updated.<a href='#' class='btn btn-primary' role='button'>Check list</a></br>";
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
