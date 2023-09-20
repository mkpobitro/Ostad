<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
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
    <h1>Simple Calculator</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the two numbers and selected operation from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        // Perform the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<div class='result'>Division by zero is not allowed.</div>";
                    break;
                }
                break;
        }

        // Display the result
        echo "<div class='result'>";
        echo "Result: $result<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="simple_calculator.php">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" required><br>

            <label for="num2">Number 2:</label>
            <input type="number" name="num2" required><br>

            <label for="operation">Select Operation:</label>
            <select name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>

            <input type="submit" value="Calculate">
        </form>
    </div>
</body>

</html>