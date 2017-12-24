<?php
   
    include 'common.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssstyle.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Inconsolata" rel="stylesheet">
    </head>
    <body>
       <?php
        include 'header.php'
       ?>
        <br><br>
       <div class="container"> 
  <div class="panel panel-default panel-primary">
      <!--<div class="panel-heading text-warning" style="background-color:#4d4d4d"><strong><span style="font-size:30px; font-family: 'Fira Sans', sans-serif;;text-align: center">Log In</span></strong></div>-->
      <div class="panel-body"><p class="text-warning"><strong>Login to make a purchase</strong></p>
          <form method="post" action="login_submit.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
   </div>
      <div class="panel-footer">Don't have an account? <a href="signup.html" class="btn btn-default">Register</a></div>
  </div>
    </div>   
     <?php
      include 'footer.php';
     ?>
            
    </body>
</html>

