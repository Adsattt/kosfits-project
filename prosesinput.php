<?php
include "koneksi.php";

if(isset($_POST['Submit'])){

//ambil data dari form
$hari = $_POST['Hari'];
$workout = $_POST['workout'];
$repetisi = $_POST['repetisi'];

//buat query
$mysqli  = "INSERT INTO schedule VALUES ('', '$hari', '$workout', '$repetisi')";
$result  = mysqli_query($conn, $mysqli);
if ($result) {
//   echo "Input berhasil";
    header("Location: tabeljadwal.php");
} else {
  echo "Input gagal";
}
}
?>