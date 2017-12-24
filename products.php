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
        <?php
        include 'check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place</p>
                <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="5.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Cannon EOS</center></strong></h3>
              <h6><strong><center>Price: Rs.36,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
              
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="2.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Nikon DSLR</center></strong></h3>
              <h6><strong><center>Price: Rs.40,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="3.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Sony DSLR</center></strong></h3>
              <h6><strong><center>Price: Rs.50,000.00</center></strong></h6>
             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
                <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="4.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Olympus DSLR</center></strong></h3>
              <h6><strong><center>Price: Rs.80,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
  </div>
                              <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="18.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Titan Model #301</center></strong></h3>
              <h6><strong><center>Price: Rs.13,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="19.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Titan Model #201</center></strong></h3>
              <h6><strong><center>Price: Rs.3,000.00</center></strong></h6>
             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="20.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>HMT Milan</center></strong></h3>
              <h6><strong><center>Price: Rs.8,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
                <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="21.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Faber Luba #111</center></strong></h3>
              <h6><strong><center>Price: Rs.18,000.00</center></strong></h6>
             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
  </div>
                                      <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="22.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>H&W</center></strong></h3>
              <h6><strong><center>Price: Rs.800</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="23.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Luis Phil</center></strong></h3>
              <h6><strong><center>Price: Rs.1,000.00</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
                <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="24.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>John Zok</center></strong></h3>
              <h6><strong><center>Price: Rs.1500</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
                                           <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="25.jpg" alt="Lights" style="width:100%">
          <div class="caption">
              <h3><strong><center>Jhalsani</center></strong></h3>
              <h6><strong><center>Price: Rs.1300</center></strong></h6>
              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
  </div>
            </div>
        </div>
        <?php
        
        include 'footer';
        
        ?>
        
    </body>
</html>