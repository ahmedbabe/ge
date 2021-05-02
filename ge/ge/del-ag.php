
<?php
      require("cnx.php");
      include "agent-list.php";

      function delete($ida){
          require("cnx.php");
          $sql="DELETE FROM employe WHERE id_e =$ida";
          return $c=mysqli_query($con,$sql);

          
          ;
      }
		 if(isset($_GET['id'])){
    delete($_GET['id']);
    echo "<script>alert('Supprimé avec success!!!'); window.location='list-ag.php'</script>";

         }
    ?>
    