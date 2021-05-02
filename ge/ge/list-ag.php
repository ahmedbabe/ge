<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:login.php');
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/list-form.css">
<title>Admin</title>
<style>
tr {
	cursor: pointer;
  }
</style>
	<title>Admin</title>
   <body>
  <?php  require_once('navbar.php')?>

<body>
<div class="content">

<?php
  include "cnx.php";
   $query ="SELECT * from employe";
   $query_run =mysqli_query($con,$query);
	 ?>
   
    <div class="container mt-7">
      <!-- Table -->
      <div class="row">

        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
			  <a class="btn " href="ajout-ag.php">Ajouter un Agent</a>

            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
				            <th scope="col">Info personnelle</th>
                    <th scope="col">telephone</th>
                    <th scope="col">matricule</th>
                    <th scope="col">Post</th>
                    <th scope="col">Banque</th>
                    <th scope="col">CNAM</th>
                    <th scope="col">CNSS</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
				<?php
		     if (mysqli_num_rows($query_run)>0) {
				while ($row = mysqli_fetch_row($query_run)) 
				{
					?>
                  <tr >
                  <th onclick="location.href='agent.php?id=<?php echo $row[0]; ?>'" scope="row">
                    <div class="media align-items-center ">
                            <?php if($row[2] != ""){ ?>
                            <img src="images/<?php echo $row[2]; ?>" class="avatar rounded-circle mr-3">
                            <?php } ?>
                      </a>
                      <div class="media-body">
                        <span class="mb-0 text-sm"><?php echo $row[1] ;?></span>
                      </div>
                    </div>
                  </th>
                  <td><div class="d-flex align-items-center"><span class="mr-2"><?php echo $row[3] ;?></span></td>
                  <td><span class="badge badge-dot mr-4"><?php echo $row[5] ;?></span></td>
                  <td><div class="d-flex align-items-center"><span class="mr-2"><?php echo $row[4] ;?></span></td>
                  <td><span class="badge badge-dot mr-4"><?php echo $row[6] ;?></span></td>
                  <td><div class="d-flex align-items-center"><span class="mr-2"><?php echo $row[7] ;?></span></td>
                  <td><div class="d-flex align-items-center"><span class="mr-2"><?php echo $row[8] ;?></span></td>
                  <?php echo "<td > <a onclick=\"return confirm('Are you sure?')\" href='del-ag.php?id=$row[0]'><i class='fas fa-trash'> </i>"?></a>


				  </tr>
				  <?php
				   }
						 
				}
		
			 else {
				 echo "aucun enregistrement";
			}

				 ?>
                  
      
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
  </div>
  
</body>

</div>

</body>
</html>
 
