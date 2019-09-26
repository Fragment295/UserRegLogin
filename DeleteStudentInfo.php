<?php
session_start();
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration' );
$StudentNo= $_POST['id'];
$s= " DELETE FROM studentinfo WHERE `student_id` = '$StudentNo';" ;
$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableStudentShow.php');
}
else{
    echo("Error Description: ".mysqli_error($con));
    
}
?>

