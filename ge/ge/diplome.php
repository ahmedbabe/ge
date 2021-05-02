<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}
include "cnx.php";
$id=$_GET['id'];

   
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/list-form.css">
<link rel="stylesheet" href="css/main.css">
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
  <form id="form" action="add-d.php"  enctype="multipart/form-data" method="post" class="frm" >
            <div class="frm-control">
                <label for="nom">Nom</label>
                <input type="text" name="nom"  id="nom" required/>
			</div>

            <div class="frm-control">
                <label for="nom">Image</label>
                <input type="file" name="image">
			</div>
            
      <div class="frm-control">
                <input type="hidden" name="id_e" value="<?php echo $id;?>">
               
            </div>
	
           <div class="foot">
            <button type="submit" name="ajout">Ajouter</button>           
            <a href="agent.php?<?php echo 'id='.$id; ?>"class="bt-rs">Annuler </a>
			</div>
        </form>
</div>
    </div>
  </div>
</div>

</body>
</html> 
