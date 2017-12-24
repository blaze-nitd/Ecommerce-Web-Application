<?php

/* include 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the edito
 */

include 'common.php';
?>
<?php

session_start();

?>

<?php
$mail= mysqli_real_escape_string($conn,$_POST['email']);
$pass= mysqli_real_escape_string($conn,$_POST['pwd']);
$select_query="SELECT id,email from users WHERE email='$mail' and password= md5('$pass')"or die($conn);
$query_result= mysqli_query($conn,$select_query);
$norows= mysqli_num_rows($query_result);
if($norows>=1)
{
    $row= mysqli_fetch_array($query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header('location: products.php');
}
 else {
     
    die("Wrong credentials. Press back and try again");
     
    
 }

?>

   
