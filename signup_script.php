
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'common.php';
session_start();

?>

<?php

$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$quer="SELECT email from users WHERE email='$email'";
$quer_result= mysqli_query($conn,$quer);
$rownum= mysqli_num_rows($quer_result);
if($rownum>=1)
{
    die("Email already present. Go back and login instead of sign up");
}
else
{
$select_query="INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email',md5('$pwd'),'$contact','$city','$address')";
$select_query_result=mysqli_query($conn,$select_query) or die(mysqli_errno($conn));
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($conn);
header('location: products.php');
}


?>