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

    $query = mysqli_query($koneksi, "INSERT INTO data_bmi VALUE ('$id', '$age', ' ', '$height', '$weight', '$bmipass')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav" style="background: rgba(255,255,255,0.33);">
        <div class="container"><a class="navbar-brand" href="#">kosfits</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-right: 0px;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="#about" style="background: rgba(255,255,255,0.3);">REGISTER</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#download">LOGIN</a></li>
                    <li class="nav-item nav-link"><i class="far fa-user" style="font-size: 37px;padding-bottom: 0px;margin-top: 0px;margin-right: 6px;"></i></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <header>
                <p>BODY MASS INDEX CALCULATOR</p>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form class="form" action="" id="form" method="POST">
                            <div class="row">
                                <div class="col"><label class="col-form-label">age<input class="form-control" type="number" name="age" id="age" autocomplete="off" required style="border-radius: 30px;filter: brightness(70%) contrast(100%);border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label">weight<input class="form-control" type="number" id="weight" name="weight" autocomplete="off" required style="border-radius: 30px;filter: brightness(70%) contrast(100%);border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label">height<input class="form-control" type="number" id="height" name="height" autocomplete="off" required style="border-radius: 30px;filter: brightness(70%) contrast(100%);border-style: solid;color: rgb(0,0,0);padding-left: 10px;text-align: center;"></label></div>
                            </div>
                            <div style="margin-top: 10px;"><button class="btn btn-primary" type="submit" name="submit" id="submit" style="background: #dbdedd;border-color: rgba(0,0,0,0);border-radius: 30px;">submit</button></div> 
                        </form>
                    </div>
                    <div class="col-md-6">
                        <p style="font-size: 30PX;">Your BMI&nbsp; is 0.00</p>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>
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
</html>