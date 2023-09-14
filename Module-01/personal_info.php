<!DOCTYPE html>
<html>

<head>
    <title>Personal Information</title>
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

        p {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Personal Information</h1>

    <?php
    // Define variables for personal information
    $name = "Pobitro Mondal";
    $age = 28;
    $country = "Bangaldesh";
    $introduction = "Hello, I am $name. I am $age years old, and I am from $country.";

    // Display personal information
    echo "<div class='container'>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Country: $country</p>";
    echo "<p>Introduction: $introduction</p>";
    echo "</div>";
    ?>

</body>

</html>