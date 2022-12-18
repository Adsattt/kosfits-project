<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "kosfits";

// variable $koneksi buat connect ke database
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>
<?php
function daftar($data)
{
    global $koneksi;

    $name = mysqli_real_escape_string($koneksi, $data["name"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);

    // cek username udah dipake apa belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('username sudah dipakai')
                  </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user ke database
    mysqli_query($koneksi, "INSERT INTO users VALUE('', '$name', '$username', '$password')");

    return mysqli_affected_rows($koneksi);
}

$errh = $errw = $errg = "";
$height = $weight = "";
$bmipass = "";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
