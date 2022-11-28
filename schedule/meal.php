<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Preparation</title>
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    <div id="app">
    <table class="tracker">
        <thead>
            <tr>
                <th>Date</th>
            <th>Main Meals</th>
            <th>Food</th>
            <th>Calories</th>
            <th></th>
            </tr>
        </thead>
        <tbody class="entries">
            <tr class="tracker__row">
                <td>
                    <input type="date" class="tracker__date">
                </td>
                <td>
                    <select class="tracker__workout" >
                    <option value="a">-</option>
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="lunch">Dinner</option>
                    </select>
                </td>
                <td>
                    <input type="text" class="tracker__text">
                    
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <button type="button" class="tracker__button">&times;</button>
                </td>
            </tr>

        </tbody>
        <tbody>
            <tr class="tracker__row tracker__row--add">
                <td colspan="5">
                    <span class="tracker__add">Add Your Meals &plus;</span>
                </td>

            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>