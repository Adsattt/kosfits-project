<html>

<head>
    <title>Body Mass Index Calculator</title>
</head>

<body>

<h3>Body Mass Index Calculator</h3>
<form method="GET" action="test.php">
    <table>
        <tr>
            <td>Berat Badan</td>
            <td><input type="text" name="berat_badan"></td>
        </tr>
        <tr>
            <td>Tinggi Badan</td>
            <td><input type="text" name="tinggi_badan"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="Gender">
                <option value="gender">-</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                </td>
            </tr>
    </table>
</form>
</body>
</html>