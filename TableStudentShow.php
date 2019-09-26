<?php
session_start();
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'studentregistration');


$s= "select * from studentinfo" ;

$result=mysqli_query($con,$s);

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
            width:800px;
            margin:auto;
            text-align:center;
            table-layout:fixed;
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
                <th colspan="2"><h1>Student Table</h1></th>
    </tr>
            <tr>
                <th> Student Name</th>
                <th> Student ID</th>
                <th> Student Email</th>
                <th> Hall name</th>
                <th> Series</th>
                <th> Department</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["name"] ?>
                    </td>
                    <td>
                        <?php echo $row["id"] ?>
                    </td>
                    <td>
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
                <?php
            }
            ?>
            
        </table>
    </body>
</html>