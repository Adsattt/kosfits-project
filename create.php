<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kostfit";

                    //membuat connection
$connection = new mysqli($servername, $username, $password, $database);

$date="";
$waktu_makan ="";
$jenis_makanan ="";
$errorMessage = "";
$successMessage= "";

if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
    $date = $_POST["date"];
    $waktu_makan = $_POST["waktu_makan"];
    $jenis_makanan = $_POST["jenis_makanan"];
    do {
        if (empty($date)|| empty($waktu_makan) || empty($jenis_makanan)) {
            $errorMessage = "All the fields are required";
            break;
        }

        //ad new client to database
        
        $sql = "INSERT INTO weeklymeal (date, waktu_makan, jenis_makanan)". "VALUES ('$date', '$waktu_makan', '$jenis_makanan')";
        $result = $connection->query($sql);

        if (!$result){
            $errorMessage = "Invalid query". $connection->error;
            break;
        }

        $date = "";
        $waktu_makan = "";
        $jenis_makanan = "";
        $successMessage = "Client added correctly";
        

        header("location: /weeklymeal/index.php");
        exit;


    } while (false);
}



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>My Shop</title>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container my-5">
            <h2>Add Your Meal Preparation</h2>

            <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismisssible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }

            ?>






            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Meals</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="waktu_makan" value="<?php echo $waktu_makan; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Food</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="jenis_makanan" value="<?php echo $jenis_makanan; ?>">
                    </div>
                </div>
                


                <?php
                 if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                    <div class='offset-sm-e col-sm-6>
                    <div class='alert alert-success alert-dismisssible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    </div>
                    </div>
                    ";
                 }

                ?>



                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid"><button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/index.php" role="
                        button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </body>