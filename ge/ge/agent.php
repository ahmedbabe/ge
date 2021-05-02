<?php
ini_set('display_errors', 'on'); 
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}
include "cnx.php";

$id=$_GET['id'];
$sr1 = mysqli_query($con,"SELECT * from employe where id_e='$id' ");
$sr2 = mysqli_query($con,"SELECT * from langue where id_e ='$id'");
$sr3 = mysqli_query($con,"SELECT * from diplomes where id_e ='$id'");
$sr4 = mysqli_query($con,"SELECT * from formations where id_e ='$id'");

if ( mysqli_num_rows($sr1) >0){
  $rw = mysqli_fetch_row($sr1);
  $id=$rw[0];

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/card.css">
<link rel="stylesheet" href="css/list-form.css">
<title>Admin</title>

<style>
.lien{
  margin:20px;
  text-decoration:none;
  
}
.piece {
  margin:10px;
  display:block;
  

}
.piece img{
  width:10%;
}
</style>
</head>
<body>
<?php require_once('navbar.php')?>
<div class="content">

<h2>Informations personnelles</h2>
<div class="cnt">

<div class="card">
<?php if($rw[5] != ""){ ?>
  <img src="images/<?php echo $rw[2]; ?>" alt="Avatar" style="width:100%">
  <?php } ?>

  
  <div class="container">
    <h3><?php echo $rw[1]?></h3> 
    <h4><?php echo $rw[4]?></h4> 
    <a href="img-mod.php?<?php echo 'id_e='.$id; ?>" ></a>

</div> 
</div>

<div class="card2">
  <div class="container">
    <h3><b>Telephone :</b></h3> 
    <p><?php echo $rw[3]?></p> 
    <h3><b>Matricule :</b></h3> 
    <p><?php echo $rw[5]?></p> 
    <h3><b>Banque :</b></h3> 
    <p><?php echo $rw[6]?></p> 
    <h3><b>CNAM :</b></h3> 
    <p><?php echo $rw[7]?></p> 
    <h3><b>CNSS :</b></h3> 
    <p><?php echo $rw[8]?></p> 
    </div>
    <div class="lien"><?php echo "<a href='modif-agent.php?idm=$rw[0]' class='btn'>Modifier des infos</a>" ?>
</div>
  </div>
</div>

<h2>Diplomes</h2>
<div class="cnt">
      <div class="card2">
        <div class="container">
      <div class="piece">
        <?php
  if ( mysqli_num_rows($sr3) >0){
          while ($rw3 = mysqli_fetch_assoc($sr3)) 
          {
            ?>
            <p><?php echo $rw3['nom']?></p> 
            <?php
            }
              
          }
      
        else {
          echo "aucun enregistrement";
        }

          ?>
      </div>
        <button  onclick="location.href='diplome.php?id=<?php echo $rw[0]; ?>'" >Ajouter</button>
        </div>
      </div>
  </div>


<h2>Formations</h2>
<div class="cnt">
      <div class="card2">
        <div class="container">
      <div class="piece">
        <?php
  if ( mysqli_num_rows($sr4) >0){
          while ($rw4 = mysqli_fetch_assoc($sr4)) 
          {
            ?>
            <p><?php echo $rw4['nom']?></p>
           
            <?php
            }
              
          }
      
        else {
          echo "aucun enregistrement";
        }

          ?>
          
      </div>
        <button  onclick="location.href='formation.php?id=<?php echo $rw[0]; ?>'" >Ajouter</button>
        </div>
      </div>
  </div>

<h2>Langues</h2>
<div class="cnt">
      <div class="card2">
        <div class="container">
      <div class="piece">
        <?php
  if ( mysqli_num_rows($sr2) >0){
          while ($rw2 = mysqli_fetch_assoc($sr2)) 
          {
            ?>
            <p><?php echo $rw2['nom']?></p> 
            <?php
            }
              
          }
      
        else {
          echo "aucun enregistrement";
        }

          ?>
      </div>
        <button  onclick="location.href='langue.php?id=<?php echo $rw[0]; ?>'" >Ajouter</button>
        </div>
      </div>
  </div>
</body>
</html> 
