<?php

require_once ('cnx.php');

//if (isset($_POST['Submit'])) {

$nom=$_POST['noml'];
$ref_emp=$_POST['id_e'];


$sql = mysqli_query($con,"INSERT INTO langue (nom,id_e) VALUES ('$nom','$ref_emp')");

if($sql){
    echo "<script>alert('Successfully Added!!!'); window.location='langue.php'</script>";
}
//}
?>