<?php
//  fungsi buat connect ke data base
require 'function.php';

if(isset($_POST["btnDaftar"])){
    if(daftar($_POST) > 0){
        echo "<script>
                alert('user baru berhasil ditambahkan!')
              </script>";
    } else{
        echo mysqli_error($koneksi);
    }
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
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#">BMI CALCULATOR</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"></li>
                    <li class="nav-item nav-link"></li>
                    <li class="nav-item nav-link"></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="text-center intro-body">
            <header>
                <p style="margin-bottom: 25px;font-size: 30px;text-decoration: underline;">REGISTER</p>
            </header>
            <form class="text-center" action="" method="POST">
                <div class="row">
                    <div class="col">
                        <label class="col-form-label" style="margin-bottom: 2px;">
                        NAME
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Input your name" style="border-radius: 30px;filter: contrast(NaN%);text-align: center;background: rgba(140,140,140,0.7);border-style: none;border-color: var(--bs-red);"></label></div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label class="col-form-label" style="padding-right: 0px;margin-right: 0px;padding-bottom: 0px;margin-bottom: 2px;">
                        USERNAME
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Input your username" style="border-radius: 30px;filter: contrast(NaN%);text-align: center;background: rgba(140,140,140,0.7);border-style: none;border-color: var(--bs-red);"></label></div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="col-form-label" style="padding-right: 0px;margin-right: 0px;padding-bottom: 0px;margin-bottom: 2px;">
                        PASSWORD
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Input your password" style="border-radius: 30px;filter: contrast(101%);text-align: center;background: #838585;border-style: solid;border-color: rgba(33,37,41,0);"></label></div>
                </div>
                
                <div>
                    
                    <button onclick="index.php" type="submit" class="btn btn-primary" name="btnDaftar" style="background: #dbdedd;border-color: rgba(0,0,0,0);border-radius: 30px;">
                    submit
                    </button>
                    
                    <button onclick="history.back()" type="button" class="btn btn-primary" name="btnDaftar" style="background: #dbdedd;border-color: rgba(0,0,0,0);border-radius: 30px;">
                    back
                    </button>
                </div>
                
            </form>
        </div>
    </header>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>