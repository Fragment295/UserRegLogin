<?php
session_start();
if(!isset($_SESSION['name'])){
   /* header('location:StudentLoginRegistrationHTML.php');*/
}


?>




<html>
<head>
<title> Student Page </title>  
      <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
  <style>
      p{
         color:white;
         text-align:center;
         font-size: 30px;
      }
      h1{
    color: #fff !important;
    margin-top: 100px !important;
    text-align: center;
    text-transform: uppercase;
}
  </style>  
<body>
    
<nav>
    <ul>
    <li><a class="active" href="Home.php">HOME</a></li>
     <li><a href="Logout.php">LOGOUT</a></li>
    </ul>
   </nav>
    
    
    <h1> Hey <?php echo $_SESSION['name']; ?></h1>
    <p>Welcome to this Student page!</p> 
    
    </div>
    
    </body>

</html>