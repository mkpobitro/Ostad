<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
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
    <h1>Grade Calculator</h1>

    <?php
    // Define a function to calculate the letter grade based on the average score
    function calculateGrade($averageScore)
    {
        if ($averageScore >= 80) {
            return 'A+';
        } elseif ($averageScore >= 70) {
            return 'A';
        } elseif ($averageScore >= 60) {
            return 'A-';
        } elseif ($averageScore >= 50) {
            return 'B';
        } elseif ($averageScore >= 40) {
            return "C";
        } elseif ($averageScore >= 33) {
            return "D";
        } else {
            return 'F';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the test scores from the form
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

        // Calculate the average score
        $averageScore = ($score1 + $score2 + $score3) / 3;

        // Calculate the letter grade
        $letterGrade = calculateGrade($averageScore);

        // Display the results
        echo "<div class='result'>";
        echo "Average Score: " . number_format($averageScore, 2) . "<br>";
        echo "Letter Grade: " . $letterGrade . "<br>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <form method="POST" action="grade_calculator.php">
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" required><br>

            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" required><br>

            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" required><br>

            <input type="submit" value="Calculate">
        </form>
    </div>
</body>

</html>