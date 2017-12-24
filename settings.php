<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
    </head>
    <body>
       <?php
         include 'header.php';
       ?>
        <br> <br> <br>
        <div class="container">
          <h2><strong>Change Password</strong></h2>
          <form method="post" action="settings_script.php">
      <div class="form-group">
      <label for="name">Old Password:</label>
      <input type="password" class="form-control" id="name" placeholder="Enter old password" name="old-password">
    </div>
    <div class="form-group">
      <label for="email">New Password:</label>
      <input type="password" class="form-control" id="email" placeholder="Enter new password" name="password">
    </div>
    <div class="form-group">
      <label for="pwd">Re-type new password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password again" name="password1">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>
        <br> <br> <br>
        <footer id="footer">
            <div class="container">
                <center>
                    Copyright © Lifestyle Store. All Rights
Reserved|Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
    </body>
</html>
