<?php
if ($_GET['hitung']) { 
  $mass = $_GET['berat_badan'];
  $height = $_GET['tinggi_badan'];

  function bmi($mass,$height) {
    $bmi = $mass*10000/($height*$height);
    return $bmi;
  } 
global $bmi;
  if ($bmi <= 18.5) {
    $output = "UNDERWEIGHT";

  } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "NORMAL WEIGHT";

  } else if ($bmi > 24.9 AND $num<=29.9) {
    $output = "OVERWEIGHT";

  } else if ($bmi > 30.0) {
    $output = "OBESE";
  }
}
echo "Your BMI value is  " . bmi($mass,$height). "  and you are : "; 
echo "$output";
?>