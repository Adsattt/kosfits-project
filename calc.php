<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_SESSION['user']['id_user'];
if (isset($_POST["submit"])) {
    global $koneksi;

    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $bmi = ($weight * 10000 / ($height * $height));
    $bmipass = $bmi;

    $query = mysqli_query($koneksi, "INSERT INTO data_bmi VALUE ('$id', '$age', '$height', '$weight', '$bmipass')");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="#">KOSFITS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-primary" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="calc.php">BMI calculator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="schedule.php">Jadwal Olahraga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="meal.php">Jadwal Makan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="logout.php">Logout</a>
                </li>
                <li class="nav-item dropdown">
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
    <div class="intro-body">
        <div class="container text-center" style="margin-top: 25px;">
            <div class="row align-items-start">
                <div class="col" style="font-size: 30px;">
                    BODY MASS INDEX CALCULATOR
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form" action="" id="form" method="POST">
                                <div class="row">
                                    <div class="col"><label class="col-form-label">age<input class="form-control" type="number" name="age" id="age" autocomplete="off" placeholder="year e.g 17" required style="border-radius: 30px;border-width: 3px;border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="col-form-label">weight<input class="form-control" type="number" id="weight" name="weight" autocomplete="off" placeholder="(kg) e.g 70" required style="border-radius: 30px;border-width: 3px; border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="col-form-label">height<input class="form-control" type="number" id="height" name="height" autocomplete="off" placeholder="(cm) e.g 175" required style="border-radius: 30px;border-width: 3px; border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                                </div>
                                <div style="margin-top: 10px;"><button class="btn btn-primary" type="submit" name="submit" id="submit" style="background: #0275d8;border-color: rgba(0,0,0,0);border-radius: 30px;border-width: 3px;">submit</button></div>
                            </form>
                        </div>
                        <div class="col-md-6" style="font-size: 30px; border-style: solid; border-radius: 20px; border-width: 1px;">
                            <p style="font-size: 30PX;"></p>
                            <?php
                            error_reporting(0);
                            echo "<span class='pass'>Your BMI is : " . number_format($bmipass, 2) . "</span>";
                            if (isset($_POST['submit'])) {
                                if ($bmipass >= 13.6 && $bmipass <= 18.5) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px ;margin-right:50px'> Low body weight. You need to gain weight by eating moderately.</span>";
                                } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The standard of good health.</span>";
                                } elseif ($bmipass > 25 && $bmipass < 29.9) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess body weight. Exercise needs to reduce excess weight.</span>";
                                } elseif ($bmipass > 30 && $bmipass < 34.9) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The first stage of obesity. It is necessary to choose food and exercise.</span>";
                                } elseif ($bmipass > 35 && $bmipass < 39.9) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The second stage of obesity. Moderate diet and exercise are required.</span>";
                                } elseif ($bmipass >= 40) {
                                    echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess fat.<b style='color:#ed4337'> Fear of death</b>. Need a doctor advice.</span>";
                                }
                            } else {
                                echo "";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
</header>
</body>

</html>