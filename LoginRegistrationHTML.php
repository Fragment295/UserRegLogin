<html>
<head>
      <title> User Login and Registration </title>
       <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     </head>
  <body>
    
    <div class = "container">
        <div class="login-box">
      <div class = "row">
          
        <div class = "col-md-6 login-left">
            <p style="color:black;font-size:300%;"> Login here</p>
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
          
          <div class = "col-md-6 login-right">
            <p style="color:black;font-size:300%;"> Register here</p>
            <form action="registration.php" method="post">
             <div class = "form-group">
              <label> Name </label>
              <input type = "text" name = "name" class = "form-control" required>
            </div>

            <div class = "form-group">
              <label> Student ID  </label>
              <input type = "number" name = "id" class = "form-control" required>
            </div>
            
            <div class = "form-group">
              <label> Password  </label>
              <input type = "password" name = "password" class = "form-control" required>
            </div>
                
             <div class = "form-group">
              <label> Email </label>
              <input type = "email" name = "email" class = "form-control" required>
            </div>
                
             <div class = "form-group">
              <label> Hall Name  </label>
              <input type = "text" name = "hallname" class = "form-control" required>
            </div>
             
            <div class = "form-group">
              <label> Series  </label>
              <input type = "number" name = "series" class = "form-control" required>
            </div>
            
           <div class = "form-group">
              <label> Department  </label>
              <input type = "text" name = "department" class = "form-control" required>
            </div>
                
            <button type="submit" class = "btn btn-primary"> Register </button>  
              
            </form>
           </div>
          
          
         </div>
        </div>
       </div>
    
    </body>
    
</html>