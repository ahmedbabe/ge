<?php

require_once ('cnx.php');

//if (isset($_POST['Submit'])) {
$id=$_POST['id'];
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$post=$_POST['post'];
$mle=$_POST['mle'];
$bnq=$_POST['bnq'];
$cnam=$_POST['cnam'];
$cnss=$_POST['cnss'];

$id=$_POST['id'];

$sql = mysqli_query($con,"UPDATE employe set nom='$nom',tel='$tel',post='$post',mle='$mle',bnq='$bnq', cnam='$cnam', cnss='$cnss' 
where id_e= '$id'");

if($sql){
    echo "<script>alert('Successfully Modified!!!'); window.location='list-ag.php'</script>";
}

//}

?>