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


<div class="content">
  <a href="test.php"><h3 class="features-title">Telechargement en format excel</h3></a>
  
  
  <div class="canvas_div_pdf" style="word-wrap: normal;" id="div" >
   
  <div id="someHtml" class="handsomeHtml"  style="word-wrap: normal;" >


    
      <div class="row">

        <div class="col">
          


          <h1 class="h3 mb-3"></h1>

            
            <div class="col-12">
              <div class="card">
                <div class="card-body m-sm-3 m-md-5">
                  <div class="mb-4">
                    <strong>REPUBLIQUE ISLAMIQUE  DE MAURITANIE</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
                    HONNEUR-FRATERNITE-JUSTICE<br />
                    
                     
                     
                  </div><br><br>
                  <h3 class="text-center">Bulletin de salaire</h3>
                  <h6 class="text-center"><?php echo date('F, Y');?></h6>

                  <table bordre="0">
                        <tbody><tr>
                        <td>Nom prenom:</td>
                        <td><input type="text" name="np"  id="np"  required/></td>
                        </tr>

                        <tr>
                        <td>Matricul:</td>
                        <td><input type="text" name="mt"  id="mt"  required/></td>
                        </tr>
                        <tr>
                        <td>Grade:</td>
                        <td><input type="text" name="gr"  id="gr"  required/></td>
                        </tr>
                        <tr>
                        <td>Fonction:</td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        </tr>
                        </tbody>
                     </table>
             

                  <hr class="my-4" />

                  
                    <div class="col-md-12">
                    
                     
                      <h4 class="text-center">Elements de paie</h4>
                     

                      
                    </div>
                  

                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th>Rubrique</th>
                        <th></th>
                        <th >Montant</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Salaire de base</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                      <tr>
                        <td>Transport</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                      <tr>
                        <td>Logement</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                      <tr>
                        <td>Electricite</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                       <tr>
                        <td>Fonction</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>
                      <tr>
                        <th>&nbsp;</th>
                        <th>Total Brut = </th>
                        <th> <input type="text" name="fn"  id="fn"  required/></th>
                      </tr>
                       <tr>
                        <td>ITC+CNSS</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                        
                      </tr>
                       <tr>
                        <td>CNAM</td>
                        <td></td>
                        <td><input type="text" name="fn"  id="fn"  required/></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>        
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>
                      <tr>
                        <th>&nbsp;</th>
                        <th>Montant Net a Payer = </th>
                        <th> <input type="text" name="fn"  id="fn"  required/></th>
                      </tr>
                      
                      
                    </tbody>
                  </table>

                  <div class="text-center">
                    

                    <h4 class="text-center">Singnature et Cachet </h4>
                    <h4 class="text-center"><?php echo date("j F, Y, g:i a");?></h4>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        
      

        
          </div>
        </div>
      </div>
  
</body>

</div>

</body>
</html>
 
