<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}
include "cnx.php";

 $id=$_GET['idm'];
$search = mysqli_query($con,"SELECT * from employe where id_e ='$id' ");

if ( mysqli_num_rows($search) >0){
  $rw = mysqli_fetch_row($search);
}
   
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/list-form.css">
<link rel="stylesheet" href="css/card.css">
<title>Admin</title>
<style>

</style>
</head>
<body>
<?php require_once('navbar.php')?>
<div class="content">

<h2>Info</h2>
<div class="cnt">

<div class="card2">
  <div class="container">
  <form id="form" action="modif.php"  method="post" class="frm" >
            <div class="frm-control">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nom"  id="nom" value="<?php echo $rw[1]?>" required/>
			</div>

			<div class="frm-control">
                <label for="nom">Telephone </label>
                <input type="text" name="tel"  id="nom" value="<?php echo $rw[3]?>" required/>
               
			</div>
      <div class="frm-control">
                <label for="nom">Post </label>
                <input type="text" name="post"  id="nom" value="<?php echo $rw[4]?>" required/>
               
			</div>	<div class="frm-control">
                <label for="nom">Matricule </label>
                <input type="text" name="mle"  id="nom" value="<?php echo $rw[5]?>" required/>
               
		        	</div>
      			<div class="frm-control">
                <label for="nom">Banque</label>
                <input type="text" name="bnq"  id="nom" value="<?php echo $rw[6]?>" required/>
               
            </div>
            <div class="frm-control">
                <label for="nom">CNAM </label>
                <input type="text" name="cnam"  id="nom" value="<?php echo $rw[7]?>" required/>
               
		      	</div>
            <div class="frm-control">
                <label for="tel">CNSS</label>
                <input type="text" name="cnss" id="tel" value="<?php echo $rw[8]?>" required/>
                <input type="hidden" name="id" id="tel" value="<?php echo $rw[0]?>" required/>

            </div>
           <div class="foot">
            <button type="submit" name="ajout">Modifier</button>           
            <a href="agent.php?<?php echo 'id='.$rw[0]; ?>"class="bt-rs">Annuler </a>
			</div>
        </form>
</div>
    </div>
  </div>
</div>
<a href="#">Modifier</a>

</body>
</html> 
