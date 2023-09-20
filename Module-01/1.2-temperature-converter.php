<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
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

        select {
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
    <h1>Temperature Converter</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the temperature value and conversion direction from the form
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];

        // Convert temperature based on the selected direction
        if ($conversion === 'celsius_to_fahrenheit') {
            $convertedTemperature = ($temperature * 9 / 5) + 32;
        } elseif ($conversion === 'fahrenheit_to_celsius') {
            $convertedTemperature = ($temperature - 32) * 5 / 9;
        }

        // Display the results
        echo "<div class='result'>";
        echo "Converted Temperature: " . number_format($convertedTemperature, 2) . "<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="temperature_converter.php">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required><br>

            <label for="conversion">Convert to:</label>
            <select name="conversion" required>
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select><br>

            <input type="submit" value="Convert">
        </form>
    </div>
</body>

</html>