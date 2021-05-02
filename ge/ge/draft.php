
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
   <style>
     header{
  z-index: 1;
  position: fixed;
  background: #22242A;
  padding: 20px;
  width: calc(100% - 0%);
  top: 0;
  height: 30px;
}


.content{
  width: (100% - 250px);
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}
.immg img{
  margin-top:-10px;
  margin-left:40px;
}
   </style>
  </head>

  <body>
 
  <input type="checkbox" id="check">
    <!--header area start-->
    <header>
     
      <div class="left_area">
      <div class="immg">
      <img class="avatar rounded-circle mr-3" src="images/logo.JPG" alt="img" >
</div>

      </div>
      <div class="right_area">

        <a href="logout.php" class="logout_btn">Déconnection</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="index.php"><i class="fas fa-desktop"></i><span>Aceuill</span></a>
        <a href="list-ag.php"><i class="fas fa-table"></i><span>Listes</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Congés </span></a>
        <a href="#"><i class="fas fa-desktop"></i><span>Bulletin de paie</span></a>
        <a href="#"><i class="fas fa-table"></i><span>CNAM</span></a>
        <a href="#"><i class="fas fa-th"></i><span>CNSS </span></a>
     </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <div class="left_area">
        <h3>AR <span>SN</span></h3>
      </div>
      </div>
      <a href="index.php"><i class="fas fa-desktop"></i><span>Aceuill</span></a>
        <a href="list-ag.php"><i class="fas fa-table"></i><span>Listes</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Congés </span></a>
        <a href="3"><i class="fas fa-desktop"></i><span>Bulletin de paie</span></a>
        <a href="#"><i class="fas fa-table"></i><span>CNAM</span></a>
        <a href="#"><i class="fas fa-th"></i><span>CNSS </span></a>
        <a href="#"><i class="fas fa-th"></i><span>Organigramme </span></a>

    </div>
    <!--sidebar end-->

     
    <script type="text/javascript" src="js/dash.js"></script>
