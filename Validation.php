<?php
session_start();


$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration');

if (isset($_POST["name"])){
$name   = $_POST['name'];}
if (isset($_POST["password"])){
$pass   = $_POST['password'];}
if (isset($_POST["email"])){
$email  = $_POST['email'];}
if (isset($_POST["hallname"])){
$hall   = $_POST['hallname'];}
if (isset($_POST["series"])){
$series = $_POST['series'];}
if (isset($_POST["department"])){
$dept   = $_POST['department'];} 


 $ss = " select * from studentinfo where name = '$name' && password = '$pass' ";
$result_s = mysqli_query($con, $ss);
$num_s = mysqli_num_rows($result_s);

$aa = " select * from admininfo where name = '$name' && password = '$pass' ";
$result_a = mysqli_query($con, $aa);
$num_a = mysqli_num_rows($result_a);

if($num_a == 1){
   $_SESSION['name'] = $name;
         header('location:AdminPage.php'); }
  
else if($num_s == 1) {
   $_SESSION['name'] = $name;
   $_SESSION['student_id'] = $id;
   header('location:StudentPage.php');
}

else {
  header('location:StudentLoginRegistrationHTML.php');}
    

?>