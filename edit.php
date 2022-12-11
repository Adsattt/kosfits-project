<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kostfit";

//membuat connection
$connection = new mysqli($servername, $username, $password, $database);

$id_meal="";
$date="";
$waktu_makan ="";
$jenis_makanan ="";
$errorMessage = "";
$successMessage= "";

if ($_SERVER['REQUEST_METHOD'] ==  'GET') {
    //Get method : show data of the client
    if (!isset($_GET["id_meal"])) {
        header("location : /weeklymeal/index.php");
        exit;
    }

    $id_meal = $_GET["id_meal"];

    // read the row of the selected client from database table
    $sql ="SELECT * FROM weeklymeal where id_meal=$id_meal";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /weeklymeal/index.php");
        exit;
    }

$date=$row["date"];
$waktu_makan =$row["waktu_makan"];
$jenis_makanan =$row["jenis_makanan"];
   
} 
else {
    // Post Method: Update the data of the client
    $id_meal=$_POST["id_meal"];
    $date = $_POST["date"];
    $waktu_makan = $_POST["waktu_makan"];
    $jenis_makanan =$_POST["jenis_makanan"];

    do {
        if ( empty($id_meal) || empty($date)|| empty($waktu_makan) || empty($jenis_makanan)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE weeklymeal SET date = '$date', waktu_makan = '$waktu_makan', jenis_makanan = '$jenis_makanan' WHERE id_meal = $id_meal";
        $result = $connection->query($sql); 

        if (!$result) {
            $errorMessage = "Invalid  query: ". $connection->error;
            break;
        }
        $successMessage = "Client updated correctly ";

        header("location: /weeklymeal/index.php");
        exit;
        
        
    } while (true);
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
            <h2>Edit Meals</h2>

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
                <input type="hidden" name="id_meal" value="<?php echo $id_meal; ?>">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">date</label>
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