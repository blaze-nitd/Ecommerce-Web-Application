<?php
  require 'common.php';
  if (isset($_SESSION['email'])) {
header('location: products.php');
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
        <div class="banner-image">
            <div class="container">
                <div id="banner-content">
                    <a href="products.php" class="btn-lg btn-danger" style="text-decoration: none">Shop Now</a>
                </div>
            </div>
            
        </div>
        <?php
        include 'footer.php';
        ?>
        
    </body>
</html>
