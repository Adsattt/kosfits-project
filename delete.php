<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kosfits";

//membuat connection
$connection = mysqli_connect($servername, $username, $password, $database);

if (isset($_GET['id_meal'])) {
    $id_meal = $_GET['id_meal'];

    $query = mysqli_query($connection, "DELETE FROM weeklymeal WHERE id_meal='$id_meal'");
    echo "<script>
                alert('Data berhasil di hapus')
           </script>";
    if ($query) {

        header("Location: meal.php?id=$id");
        //header('Location: viewtr.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
