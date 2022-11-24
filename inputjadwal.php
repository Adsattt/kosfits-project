<html>

<head>
    <title>Weekly Workout Schedule</title>
</head>

<body>

<h3>Input Your Weekly Workout Schedule</h3>
<form method="post" action="prosesinput.php">
    <table>
        <tr>
            <td>Select Your Day</td>
            <td>
                <select name="Hari">
                <option value="day">-</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select Your Workout</td>
            <td>
                <select name="workout">
                <option value="workout">-</option>
                    <option value="Push Up">Push Up</option>
                    <option value="Sit Up">Sit Up</option>
                    <option value="Squat">Squat</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Repetisi</td>
            <td><input type="text" name="repetisi"></td>
        </tr>
        <tr>
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Submit">
                </td>
            </tr>
    </table>
</form>
</body>
</html>