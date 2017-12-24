
<?php

include 'common.php';
if(isset($_SESSION['email']))
{
    header('location:products.php');
}

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
        include 'header.php';
        ?>
        <br><br>
      <div class="container">
          <h2><strong>Sign Up</strong></h2>
          <form method="post" action="signup_script.php">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
    </div>
      <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
    </div>
      <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter contact" name="address">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

    <?php
    
    include 'footer.php'
    
    ?>
            
    </body>
</html>
