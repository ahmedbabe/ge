<?php

require_once ('cnx.php');

//if (isset($_POST['Submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
$img=$_FILES["image"]["name"];
$nom=$_POST['nom'];
$id=$_POST['id_e'];


$sql = mysqli_query($con,"INSERT INTO formations (nom,piece,id_e) 
VALUES ('$nom','$img','$id')");

if($sql){
    echo "<script>alert('Ajouté avec success!!!'); window.location='formation.php'</script>";
}

?>