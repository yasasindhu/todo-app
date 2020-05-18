<!doctype html>
<html lang="en">
  <head>
<style>
body {
     margin: 0;
    padding: 0;
}
.backgroundimg{
background:url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg");
    background-size: cover;
    background-position: center;
    background-repeat=no-repeat;
    font-family: sans-serif;
height:100vh;
width=100%;

}
</style>
</head>
  <body>
<?php
include("nav.php")
 ?>
<nav class="navbar navbar-expand-lg navbar-inverse bg-dark">
<div class="text-right mb-1">
<button type="button" class="btn btn-outline-success and-all-other-classes">
  <a href="loginpage.php" style="color:inherit">login</a>
   </button>
<button type="button" class="btn btn-outline-success and-all-other-classes">
  <a href="register.php" style="color:inherit">Register</a>
</button>
    </div>
    </nav>

<div class="row backgroundimg">
<div class="container">
<center><h1>Start planning today</h1></center>
<center><button type="button" class="btn btn-success">Get started -Its free</button></center>
<center><h1>Find your Way</h1></center>
<center><button type="button" class="btn btn-info">Start Doing-></button></center>
<center><h1>Here is Productive Platform</h1></center>
<center><button type="button" class="btn btn-warning">Make A Game Plan</button></center>
<center><h1>Focus On Getting Things Done</h1></center>
<center><button type="button" class="btn btn-success">Power-Up Your Workflow</button></center>

</div>
  </body>
</html>
