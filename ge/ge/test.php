

<?PHP
$doc = new \DOMDocument();
  //$doc->loadHTML($htmlinput);

 ?>

<?php

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "cnss_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

//mysqli_fetch_row
 

  include "cnx.php";
 
  
   //$dt = $doc->getElementById("mydiv");
  // $arr = $dt->getElementsByTagName('tr');
  $flag = false;
   $result = mysqli_query($con,"SELECT * FROM employer where id = 1") or die('Query failed!');
  while(false !== ($row = mysqli_fetch_assoc($result))) {
  //if (is_array($dt) || is_object($dt))
//{
   
 // foreach($dt as $row) {
   //$row = $data ;
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>
  
 
