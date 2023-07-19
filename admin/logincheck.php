<?php
$username=$_POST['name'];
$password=$_POST['password'];


if($username =='admin' and $password == 'admin@123')
{
   session_start();
   $_SESSION["type"]='admin';
   $_SESSION["name"]='admin';
   header("location:http://localhost/online shop/admin/home.php");
}
else
{
   $message="Invalid Username or Password!";
   echo "<script type='text/javascript'>alert('$message');
   location='index.php';
   </script>";
}
?>