<?php
session_start();
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration' );
 


    if (isset($_POST["id"])){
    $oldId   = $_POST['id'];}
    if (isset($_POST["new_id"])){
    $newId   = $_POST['new_id'];}
    if (isset($_POST["new_name"])){
    $newName   = $_POST['new_name'];}
    if (isset($_POST["new_pass"])){
    $newPass   = $_POST['new_pass'];}
    if (isset($_POST["new_email"])){
    $newEmail  = $_POST['new_email'];}
    if (isset($_POST["new_hall"])){
    $newHall   = $_POST['new_hall'];}
    if (isset($_POST["new_series"])){
    $newSeries = $_POST['new_series'];}
    if (isset($_POST["new_dept"])){
    $newDept  = $_POST['new_dept'];}
    




$s= " UPDATE `studentinfo` SET `name` = '$newName', `student_id` = '$newId', `password` = '$newPass' , `email` = '$newEmail' , `hallname` = '$newHall' , `series` =  '$newSeries' , `department` = '$newDept'  
       WHERE `studentinfo`.`student_id` = '$oldId';" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableStudentShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    echo "<br>";
    
}


?>
