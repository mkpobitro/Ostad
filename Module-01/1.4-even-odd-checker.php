<!DOCTYPE html>
<html>

<head>
    <title>Even Odd Checker</title>
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
    <h1>Even Odd Checker</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST['number'];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $message = "The number $number is even.";
        } else {
            $message = "The number $number is odd.";
        }

        // Display the result
        echo "<div class='result'>";
        echo $message . "<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="even_odd_checker.php">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" required><br>

            <input type="submit" value="Check">
        </form>
    </div>
</body>

</html>