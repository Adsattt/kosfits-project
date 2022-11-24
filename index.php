<?php
require 'function.php';

if (isset($_POST["submit"])) {
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    if (empty($_POST['height'])) {
        $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";
    } else {
        $height = validate($_POST['height']);
    }

    if (empty($_POST['weight'])) {
        $errw = "<span style='color:#ed4337; font-size:17px; display:block'>Weight is requried</span>";
    } else {
        $weight = validate($_POST['weight']);
    }

    if (empty($_POST['height'] && $_POST['weight'])) {
        echo "";
    } else {
        $bmi = ($weight / ($height * $height));
        $bmipass = $bmi;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="bmi.js"></script> -->
    <title>BMI PAGE</title>
</head>

    <body>
        <h3><b>B</b>ody <b>M</b>ass <b>I</b>ndex Calculator</h3>
        <form class="form" action="" id="form" method="POST">
            <div class="row-one">
                <input type="text" class="text-input" id="age" autocomplete="off" required/><p class="text">Age</p>
                <label class="container">
                    <input type="radio" name="radio" id="f"><p class="text">Female</p>
                    <span class="checkmark"></span>
                </label>
                <label class="container">
                    <input type="radio" name="radio" id="m"><p class="text">Male</p>
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="row-two">
                <input type="text" class="text-input" id="height" name="height" autocomplete="off" required><p class="text">Height (cm)</p>
                <input type="text" class="text-input" id="weight" name="weight" autocomplete="off" required><p class="text">Weight (kg)</p>
            </div>
            <button type="submit" id="submit" name="submit">Submit</button>
        </form>
            <?php
            error_reporting(0);
                echo "<span class='pass'>Your BMI is : ".number_format($bmipass , 2) ."</span>";
                if (isset($_POST['submit'])){
                    if ($bmipass >= 13.6 && $bmipass <= 18.5) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px ;margin-right:50px'> Low body weight. You need to gain weight by eating moderately.</span>";?>
                        <img src="assets/Untitled-2 copy.png" class="one"><?php
                    } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The standard of good health.</span>";?>
                        <img src="assets/Untitled-1 copy.png" class="two"><?php
                    } elseif ($bmipass > 25 && $bmipass < 29.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess body weight. Exercise needs to reduce excess weight.</span>";?>
                        <img src="assets/Untitled-3 copy.png" class="three"><?php
                    } elseif ($bmipass > 30 && $bmipass < 34.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The first stage of obesity. It is necessary to choose food and exercise.</span>";?>
                        <img src="assets/Untitled-4 copy.png" class="four"><?php
                    } elseif ($bmipass > 35 && $bmipass < 39.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The second stage of obesity. Moderate diet and exercise are required.</span>";?>
                        <img src="assets/Untitled-5 copy.png" class="five"><?php
                    } elseif ($bmipass >= 40) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess fat.<b style='color:#ed4337'> Fear of death</b>. Need a doctor advice.</span>";?>
                        <img src="assets/Untitled-6 copy.png" class="six"><?php
                    }
                } else {
                    echo "";
                }
            ?>
    </body>     
</html>