<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
   
    </head>

   <body>

  <?php require_once('navbar.php')?>

<div class="content">
<div class="cardd">
<div class="cnt">
<div class="courses-container">
<div class="course">
		<div class="course-preview">
			
		</div>
		<div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="org.php"><i class="fas fa-th"></i><h3 class="features-title">Organigramme</h3></a>
		</div>
</div>
<div class="course">
    <div class="course-preview">
      
    </div>
    <div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="list-ag.php"><i class="fas fa-table"></i><h3 class="features-title">Listes</h3></a>
    </div>
</div>
</div>
</div>
</div>

<div class="cardd">
<div class="cnt">
<div class="courses-container">
<div class="course">
    <div class="course-preview">
    </div>
    <div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="#"><i class="fas fa-th"></i><h3 class="features-title">Congés</h3></a>
    </div>
</div>
<div class="course">
    <div class="course-preview"> 
    </div>
    <div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="bultin.php"><i class="fas fa-desktop"></i><h3 class="features-title">Bulletin de paie</h3></a>
    </div>
</div>
</div>
</div>
</div>

<div class="cardd">
<div class="cnt">
<div class="courses-container">
<div class="course">
    <div class="course-preview"> 
    </div>
    <div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="#"><i class="fas fa-table"></i><h3 class="features-title">CNAM</h3></a>
    </div>
</div>
<div class="course">
    <div class="course-preview">
    </div>
    <div   class="course-info" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
      <a href="#"><i class="fas fa-th"></i><h3 class="features-title">CNSS</h3></a>
    </div>
</div>
</div>
</div>
</div>



</div>
</body>
</html>














