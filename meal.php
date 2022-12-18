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
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Meal Schedule</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
    <div class="container my-5">
        <h2>List of Your Meal</h2>
        <a class="btn btn-primary" href="create.php" role="button">Add Your Meal Preparation</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Meals</th>
                    <th>Food</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "kosfits";
                //membuat connection
                $connection = new mysqli($servername, $username, $password, $database);
                //check connection
                if ($connection->connect_error) {
                    die("Connection failed" . $connection->connect_error);
                }
                //read all row froom database table
                $sql = "SELECT * FROM weeklymeal";
                $result = $connection->query($sql);
                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }
                //read data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                        <td>$row[id_meal]</td>
                        <td>$row[date]</td>
                        <td>$row[waktu_makan]</td>
                        <td>$row[jenis_makanan]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id_meal=$row[id_meal]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id_meal=$row[id_meal]'>Delete</a>
                        </td>
                    </tr>
                        ";
                }
                ?>
            </tbody>

        </table>
    </div>
</body>

</html>