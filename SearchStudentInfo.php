<?php
session_start();
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration' );
$StudentNo= $_POST['id'];
$s= " SELECT `name`, `email`, `hallname`, `series`, `department` FROM `studentinfo` WHERE  `student_id` = '$StudentNo';" ;
$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
$row=mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html>
    <head>
        <title>
        Student Information
        </title>
    </head>
    <style>
        body{

            background:Seashell;
        }
        table{
            width:1000px;
            margin:auto;
            text-align:center;
            table-layout:auto;
        }
        table,tr,th,td{
            padding:20px;
            color:white;
            border:1px solid #080808;
            border-collapse:collapse;
            font-size:18px;
            font-family:Arial;
            background:linear-gradient(top,#3c3c3c 0%,#222222 100%);
            background:-webkit-linear-gradient(top,#3c3c3c 0%,#222222 100%);
        }
        
        
        
    </style>
    <body>
        
        <table>
            <tr>
                <th colspan="13"><h1>Student Table</h1></th>
    </tr>
            <tr>
                <th colspan="2"> Student Name</th>
                <th colspan="3"> Student Email</th>
                <th> Hall name</th>
                <th> Series</th>
                <th> Department</th>
            </tr>
         
           
                <tr>
                    <td colspan="2">
                        <?php echo $row["name"] ?>
                    </td>
                    <td colspan="3">
                        <?php echo $row["email"] ?>
                    </td>
                    <td>
                        <?php echo $row["hallname"] ?>
                    </td>
                    <td>
                        <?php echo $row["series"] ?>
                    </td>
                    <td>
                        <?php echo $row["department"] ?>
                    </td>
                </tr>
            
        </table>
    </body>
</html>
