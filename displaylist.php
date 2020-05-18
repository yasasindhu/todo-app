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
$user_id=$_GET['user_id'];
//echo "$user_id";
$user_name=$_GET['user_name'];
//echo "$user_name";
$query="SELECT * FROM `list` WHERE  user_id='$user_id' ";
$data=mysqli_query($mysqli,$query);
$totalrows=mysqli_num_rows($data);
if($totalrows!=0)
{
//echo "found";
echo "<tr>
  <td><a href='list.php?user_id=$user_id&user_name=$user_name' class='btn btn-info' role='button'><h8><center>Click to addlists</center></h8></a></td>
<br/>
</tr>";
?>
<div class="container">
  <table class="table">
      <thead class="thead-dark">
  <tr>
    <th colspan="1">LIST NAME   </th>
    <th colspan="1">DUE DATE  </th>
    <th colspan="1">EDIT OPTION  </th>
    <th colspan="1">DELETE  </th>
    <th colspan="1">ADD TASKS  </th>
    <th colspan="1">VIEW TASKS  </th>
    </tr>
</thead>
  <?php
while($result=mysqli_fetch_assoc($data)){
  //echo "no";
  echo " <tbody>
   <tr class='table-active'>
<!-- <td>".$result['list_id']."</td><br>-->
<td>".$result['list_name']."</td>
<td>".$result['list_date']."</td>
  <td><a href='updatelist.php?user_id=$user_id&list_id=$result[list_id]&user_name=$user_name'  class='btn btn-warning' role='button'>update</a></td>
<td><font color='red'><a href='deletelist.php?user_id=$user_id&list_id=$result[list_id]&user_name=$user_name'  class='btn btn-danger' role='button'>delete</a></td>
<td><a href='addtask.php?user_id=$user_id&list_id=$result[list_id]&user_name=$user_name'  class='btn btn-primary' role='button'>+add task</a></td>
<td><a href='displaytask.php?user_id=$user_id&list_id=$result[list_id]&user_name=$user_name'  class='btn btn-success' role='button'>view tasks</a></td>
  </tr>
  </tbody>
  <p style='line-height:160px'></p>";
}
}
else {
  echo "<h1><center>no lists found</center></h1>";
  echo "<td><a href='list.php?user_id=$user_id&user_name=$user_name'><h1><center>+add list</center></h1></a></td>";

}

 ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
    <script src=js/bootstrap.min.js"></script>
    </body>
    </html>
