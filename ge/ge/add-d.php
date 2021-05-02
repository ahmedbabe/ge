<?php
ini_set('display_errors', 'on'); 

require_once ('cnx.php');

//if (isset($_POST['Submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
$img=$_FILES["image"]["name"];
$nom=$_POST['nom'];
$tel=$_POST['id_e'];


$sql = mysqli_query($con,"INSERT INTO diplomes (nom,piece,id_e) 
VALUES ('$nom','$img','$tel')");

if($sql){
    echo "<script>alert('Successfully Added!!!'); window.location='diplome.php'</script>";
}

?>