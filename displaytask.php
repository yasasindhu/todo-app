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

<?php
$mysqli=new mysqli("localhost","root","","todoapplication");
error_reporting(0);
//$user_id=$_GET['user_id'];
//echo "$user_id";
$user_name=$_GET['user_name'];
//echo "$user_name";
$list_id=$_GET['list_id'];
$query="SELECT * FROM `task` WHERE  list_id='$list_id' ";
$data=mysqli_query($mysqli,$query);
$totalrows=mysqli_num_rows($data);
if($totalrows!=0)
{
echo "<tr>
<td><a href='addtask.php?user_name=$user_name&list_id=$list_id'  class='btn btn-primary' role='button'>+add task</a></td>
</tr>"
  ?>
  <div class="container">
    <table class="table">
        <thead class="thead-dark">
    <tr>
    <th>TASK NAME</th>
    <th>UPDATE</th>
    <th>DELETE</th>
  </tr>
</thead>
  <?php
//echo "found";
while($result=mysqli_fetch_assoc($data)){
  //echo "no";
  echo "<tbody>
   <tr class='table-active'>
  <tr>
  <td>".$result['task_name']."</td>
  <td><a href='updatetask.php?user_name=$user_name&list_id=$list_id&task_id=$result[task_id]'class='btn btn-warning' role='button'>Update</a></td>
  <td><a href='deletetask.php?user_name=$user_name&list_id=$list_id&task_id=$result[task_id]' class='btn btn-danger' role='button'>delete</a></td>
  </tr>
  </tbody>
  <p style='line-height:160px'></p>";

}
}
else {
  echo "not found";
}

 ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
    <script src=js/bootstrap.min.js"></script>
    </body>
    </html>
