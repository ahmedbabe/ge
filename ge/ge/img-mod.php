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
$search = mysqli_query($con,"SELECT * from employe where id_e ='$id' ");

if ( mysqli_num_rows($search) >0){
  $rw = mysqli_fetch_row($search);
  $id=$rw[0];

}
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
<div id="delete<?php  echo $id;?>" >
            <div class="modal-header">
            <h3 >Update</h3>
            </div>
            <div class="modal-body">
            <div class="alert alert-danger">
            <?php if($rw[2] != ""): ?>
            <img src="uploads/<?php echo $rw[2]; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
            <?php else: ?>
            <img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
            <?php endif; ?>
            <form action="modif_img.php?<?php echo 'id_emp='.$id; ?>" method="post" enctype="multipart/form-data">
            <div style="color:blue; margin-left:150px; font-size:30px;">
                <input type="file" name="image" style="margin-top:-115px;">
            </div>
            
            </div>
            <hr>
            <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-danger">Modifier</button>
            </form>
            </div>
            </div>
            </div>

  </div>
</div>

</body>
</html> 
