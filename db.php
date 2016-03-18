<?php


if(isset($_POST['saveRegister'])){
  $num1    = $_POST["date"];
  $num2  = $_POST["workOut"];
  $oper     = $_POST["operation"];

  switch ($oper) {
    case '+':
      echo $num1 + $num2;
      break;

    case '-':
      echo $num1 - $num2;
      break;

    case '*':
      echo $num1 * $num2;
      break;

    case '/':
      echo $num1 / $num2;
      break;
    default:
      # code...
      break;
  }

  /*$myfile   = fopen("$date.txt", "a") or die("Unable to open file!");
  fwrite($myfile, $workout);
  fwrite($myfile, $weight);
  fwrite($myfile, $reps);
  fwrite($myfile, $notes);
  fclose($myfile);*/
  }

?>
