<?php

session_start();

?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $item_id=$_GET['id'];
    
?>

<?php

include 'common.php';
?>

<?php
$user_id=$_SESSION['id'];
$select_query="INSERT INTO user_items(user_id, item_id, status) VALUES($user_id, $item_id, 'Added to cart')" or die(mysqli_error($conn));
$select_query_result=mysqli_query($conn,$select_query) or die(mysqli_errno($conn));
header('location: products.php');

?>