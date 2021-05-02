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
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/card.css">
<title>Admin</title>
</head>
<body>
<?php require_once('navbar.php')?>
<div class="content">

<h2>Langues</h2>
<div class="cnt">
    <div class="card2">
      <div class="container">
      <form action="add-ln.php" method="post">
      <input type="text" name="noml">
      <input type="hidden" name="id_e" value="<?php echo $id;?>">
      <button type="submit">ok</button>
      <a href="agent.php?<?php echo 'id='.$id; ?>"class="bt-rs">Annuler </a>
      </form>
    </div>
  </div>
</div>


</body>
</html> 
