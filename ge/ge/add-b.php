<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}
include "cnx.php";

   
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/list-form.css">
<link rel="stylesheet" href="css/main.css">

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
  <form id="form" action="ajout.php"  enctype="multipart/form-data" method="post" class="frm" >
            <div class="frm-control">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nom"  id="nom" required/>
			</div>

            <div class="frm-control">
                <label for="nom">Image</label>
                <input type="file" name="image">
			</div>
            
      <div class="frm-control">
                <label for="nom">Telephone</label>
                <input type="text" name="tel"  id="nom"  required/>
               
            </div>
			<div class="frm-control">
                <label for="nom">Post </label>
                <input type="text" name="post"  id="nom" required/>
               
			</div>
		      	<div class="frm-control">
                <label for="nom">Matricule</label>
                <input type="text" name="mle"  id="nom"  required/>
               
            </div>
           
            <div class="frm-control">
                <label for="nom">Banque</label>
                <input type="text" name="bnq"  id="nom"  required/>
               
            </div>
            <div class="frm-control">
                <label for="nom">CNAM</label>
                <input type="text" name="cnam"  id="nom"  required/>
               
            </div> <div class="frm-control">
                <label for="nom">CNSS</label>
                <input type="text" name="cnss"  id="nom"  required/>
               
            </div>
         
           <div class="foot">
            <button type="submit" name="ajout">Ajouter</button>           
            <a href="list-ag.php" class="bt-rs">Annuler </a>
			</div>
        </form>
</div>
    </div>
  </div>
</div>

</body>
</html> 
