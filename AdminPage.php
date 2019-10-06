<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:LoginRegistrationHTML.php');
}


?>




<html>
<head>


<title> Admin Page </title>  
      <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     </head>
    
<style>
    h1{
    color: #fff !important;
    margin-top: 100px !important;
    text-align: center;
    text-transform: uppercase;
}
    </style>

<body>
    
   
   <nav>
    <!-- <img src = "HostelManagementLogo02.jpg" width = "200" height = "80">-->
    <ul>
    <li><a class="active" href="Home.php">HOME</a></li>
     <li><a href="UpdateStudentInfo.html">UPDATE</a></li>
     <li><a href="DeleteStudentInfo.html">DELETE</a></li>
     <li><a href="SearchStudentInfo.html">SEARCH</a></li>
     <li><a href="Logout.php">LOGOUT</a></li>
    </ul>
   </nav>
  

    <div class="container">
    <h1> Hey <?php echo $_SESSION['name']; ?></h1>
    <div><h3><p style = " color:white; text-align:center;">Welcome to Admin page!</p></h3> </div>
     <p><h3 style = "color:white; margin-top: 50px; text-align:center;"> Admin can Delete, Update and Search Student information here.</h3> </p>
    
    </div>

    

    </body>

</html>