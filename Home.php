<html>
<head>
<title> Home </title>
       <link rel = "stylesheet" type = "text/css" href = "Style.css">
      <link rel = "stylesheet" type = "text/css" 
      href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<style>
 body{
     padding : 0;
     margin : 0;
 }

.slider-frame{
    overflow: hidden;
    height: 800px;
    width:1200px;
    margin-left:260px;
    margin-top:20px;
}

@-webkit-keyframes slide_animation{
    0% {left : 0px;}
    10% {left : 0px;}
    20% {left : 1200px;}
    30% {left : 1200px;}
    40% {left : 2400px;}
    50% {left : 2400px;}
    60% {left : 1200px;}
    70% {left : 1200px;}
    80% {left : 0px;}
    90% {left : 0px;}
    100% {left : 0px;}
}

.slide-images{
    width: 1600px;
    height:400px;
    margin: 0 0 0 -2400px;
    position: relative;
    -webkit-animation-name: slide_animation;
    -webkit-animation-duration: 33s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running;

}

.image-container{
    height: 800px;
    width:800px;
    position: relative;
    float:left;

}

 h2{
    color: #fff !important;
    margin-top: 50px !important;
    text-align: center;
    text-transform: uppercase;
}
 img{
     margin-left:10px;
 }
    </style>


<body>

<nav>

<a href = "http://www.ruet.ac.bd/"><img src="RUETlogo.png" width="64" height="80"> </a>  
 <ul>
    <li><a href="AdminLoginRegistrationHTML.php">ADMIN</a></li>
     <li><a href="StudentLoginRegistrationHTML.php">STUDENT</a></li>
     <li><a href="SearchStudentInfo.html">ABOUT US</a></li>
    </ul>
   </nav>
  
     <div class="welcomeText">
     <h2> WELCOME TO THE HOSTEL MANAGEMENT SYSTEM OF RUET </h2>
     </div>
     
     <div class = "slider-frame">
     <div class = "slider-images">

       <div class = "image-container">
         <img src = "RUET01.jpg">
         </div>
         <div class = "image-container">
         <img src = "RUET02.jpg">
         </div>
         <div class = "image-container">
         <img src = "RUET03.jpg">
         </div>

     </div>  
     </div>



</body>


</html>
