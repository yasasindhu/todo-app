<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css_Files/fullwidth.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php
  include("nav.php");
     ?>

<div class="row backgroundimg">
<div class="container">

<div class="col-10 user-img">
<img src="avatar.png" class="avatar">
</div>


<div class="login-box">
<h1>Register Here</h1>
              <form action="" method="POST">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="user_password" placeholder="Enter Password">
           <p>E-mail</p>
           <input type="text" name="email" placeholder="Enter e-mail">
           <input type="submit" name="submit" value="Register">
            </form>

<?php
error_reporting(0);
$mysqli=new mysqli("localhost","root","","todoapplication");
if($_POST["submit"])
{
//$id=$_GET["id"];
$name=$_POST["user_name"];
$password=$_POST["user_password"];
$email=$_POST["email"];
$query="SELECT * FROM `user` WHERE user_name='$name' && user_password='$password' ";
$data=mysqli_query($mysqli,$query);
$totalrows=mysqli_num_rows($data);
if($totalrows==0)
{
  if($name!="" && $password!="" && $email!=""){
  $query="INSERT INTO user VALUES('','$name','$password','$email')";
  mysqli_query($mysqli,$query);
  $query="SELECT * FROM `user` WHERE user_name='$name' && user_password='$password' ";
  $data=mysqli_query($mysqli,$query);
while($result=mysqli_fetch_assoc($data)){
  echo "<tr>
    <td><a href='list.php?user_id=$result[user_id]&user_name=$result[user_name]' class='btn btn-info' role='button'><h8><center>Click to addlists</center></h8></a></td>
</tr>";
}
}
}
else {
  echo "<font color=red>already account exists";
}
}

?>
</body>
</html>
