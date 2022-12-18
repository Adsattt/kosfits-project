<?php
require 'function.php';
if (!isset($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('schedule.php') </script>";
    $koneksi->close();
    exit;
}

$delete = $koneksi->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");
if ($delete) {
    echo "<script> alert('Event has deleted successfully.'); location.replace('schedule.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: " . $koneksi->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
$koneksi->close();
