<!DOCTYPE html>
<html>

<head>
    <title>Number Comparison Tool</title>
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
    <h1>Number Comparison Tool</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the two numbers from the form
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        // Display the result
        echo "<div class='result'>";
        echo "The larger number is: " . $largerNumber . "<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="comparison_tool.php">
            <label for="number1">Enter Number 1:</label>
            <input type="number" name="number1" required><br>

            <label for="number2">Enter Number 2:</label>
            <input type="number" name="number2" required><br>

            <input type="submit" value="Compare">
        </form>
    </div>
</body>

</html>