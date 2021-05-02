<?php

require_once ('cnx.php');

//if (isset($_POST['Submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
$img=$_FILES["image"]["name"];
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$post=$_POST['post'];
$mle=$_POST['mle'];
$bnq=$_POST['bnq'];
$cnam=$_POST['cnam'];
$cnss=$_POST['cnss'];

$sql = mysqli_query($con,"INSERT INTO employe (nom,img,tel,post,mle,bnq,cnam,cnss) 
VALUES ('$nom','$img','$tel','$post','$mle','$bnq','$cnam','$cnss')");

if($sql){
    echo "<script>alert('Ajouté avec success!!!'); window.location='list-ag.php'</script>";
}

?>