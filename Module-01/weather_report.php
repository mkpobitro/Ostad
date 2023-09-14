<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Weather Report</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the temperature from the form
        $temperature = $_POST['temperature'];

        // Determine the weather message based on the temperature range
        if ($temperature < 10) {
            $message = "It's freezing!";
        } elseif ($temperature >= 10 && $temperature < 25) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }

        // Display the result
        echo "<div class='result'>";
        echo $message . "<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="weather_report.php">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required><br>

            <input type="submit" value="Check Weather">
        </form>
    </div>
</body>

</html>