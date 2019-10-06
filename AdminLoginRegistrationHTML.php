<html>
<head>
      <title> Admin Login </title>
       <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     </head>
    <style>
        .container{
            margin-top:100px;
        }
        .row{
            margin-left:100px !important;
        }
    </style> 
     
   
  <body>
  
  <nav>
   <ul>
    <li><a class="active" href="Home.php">HOME</a></li>
    </ul>
   </nav>
    
  
  
  <div class = "container">
        <div class="login-box">
      <div class = "row">
          
        <div class = "col-md-10 login-left">
            <p style="color:black;font-size:200%;"> Login here</p>
            <form action="Validation.php" method="post">
            <div class = "form-group">
              <label> Name </label>
              <input type = "text" name = "name" class = "form-control" required>
            </div>
            
            <div class = "form-group">
              <label> Password  </label>
              <input type = "password" name = "password" class = "form-control" required>
            </div>
             
            <button type="submit" class = "btn btn-primary"> Login </button>  
              
       </form>
      </div>
    </div>
    </div>
    </div>
    
    </body>
    
</html>