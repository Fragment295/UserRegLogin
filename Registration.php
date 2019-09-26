<?php
session_start();
header('location:Login.php');

$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration');

if (isset($_POST["name"])){
$name   = $_POST['name'];}
if (isset($_POST["id"])){
$id     = $_POST['id'];}
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


 $ss_s = " select * from studentinfo where name = '$name'";
$result_s = mysqli_query($con, $ss_s);
$num_s = mysqli_num_rows($result_s);

if($num_s == 1){
    echo "Username Already Exists Fella";
}
else {
   $reg = "insert into studentinfo (name,student_id,password,email,hallname,series,department) values ('$name','$id', '$pass','$email','$hall','$series','$dept')";
    mysqli_query($con,$reg);
    header('location:Home.php');
}
    

?>