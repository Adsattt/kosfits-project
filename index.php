<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="homestyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Homepage</title>
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

<body>
    <div class="page-list-container">
        <h2 class="page-list-title"></h2>
        <div class="page-list-wrapper">
            <div class="page-list">
                <div class="page-list-item">
                    <img class="page-list-item-img" src="asset/berat.jpg" alt="">
                    <span class="page-list-item-title">BMI CALCULATOR</span>
                    <p class="page-list-item-desc">Hitung BMI kamu disini</p>
                    <a href="calc.php">
                        <button class="page-list-item-button">Details</button>
                    </a>
                </div>
                <div class="page-list-item">
                    <img class="page-list-item-img" src="asset/workout.jpg" alt="">
                    <span class="page-list-item-title">JADWAL OLAHRAGA</span>
                    <p class="page-list-item-desc">Persiapkan jadwal olahraga sesuai kebutuhan dan keinginanmu</p>
                    <a href="schedule.php">
                        <button class="page-list-item-button">Details</button>
                    </a>
                </div>
                <div class="page-list-item">
                    <img class="page-list-item-img" src="asset/food.jpg" alt="">
                    <span class="page-list-item-title">JADWAL MAKAN</span>
                    <p class="page-list-item-desc">Atur pola makan sehari hari disini</p>
                    <a href="meal.php">
                        <button class="page-list-item-button">Details</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</div>

</html>