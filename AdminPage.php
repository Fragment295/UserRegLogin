<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:Login.php');
}


?>




<html>
<head>
<title> Admin </title>  
      <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
    
<body>
    
    <div class="container">
    
    <a class = "float-right" href = "Logout.php"> LOGOUT </a>
    <h1> Hey <?php echo $_SESSION['name']; ?></h1>
    <div class = "wel"> <p>Welcome to this Admin page!</p> </div>
    
    </div>

    <button type="submit" class="btn"><a href ="delete.html" >Delete</a></button>
    
    </body>

</html>