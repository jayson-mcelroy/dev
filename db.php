<?php

if(isset($_POST['saveRegister'])){
  $date     = $_POST["date"];
  $workout  = $_POST["workOut"];
  $weight   = $_POST["weight"];
  $reps     = $_POST["reps"];
  $notes    = $_POST["notes"];
  $myfile   = fopen("$date.txt", "a") or die("Unable to open file!");
  fwrite($myfile, $workout);
  fwrite($myfile, $weight);
  fwrite($myfile, $reps);
  fwrite($myfile, $notes);
  fclose($myfile);
  }

?>
