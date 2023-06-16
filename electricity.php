<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the consumer name, consumer number, previous reading, and present reading from the form
    $consumerName = $_POST["consumerName"];
    $consumerNumber = $_POST["consumerNumber"];
    $prevReading = $_POST["prevReading"];
    $presentReading = $_POST["presentReading"];

    // Calculate the units consumed
    $unitsConsumed = $presentReading - $prevReading;

    // Calculate the electricity bill based on the tariff
    $rate = 0;
    if ($unitsConsumed < 100) {
        $rate = 3;
    } elseif ($unitsConsumed >= 100 && $unitsConsumed <= 200) {
        $rate = 4;
    } elseif ($unitsConsumed > 200 && $unitsConsumed <= 300) {
        $rate = 5;
    } elseif ($unitsConsumed > 300) {
        $rate = 6;
    }

    $billAmount = $unitsConsumed * $rate;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Electricity Bill Calculator</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="consumerName">Consumer Name:</label>
        <input type="text" name="consumerName" required>

        <label for="consumerNumber">Consumer Number:</label>
        <input type="text" name="consumerNumber" required>

        <label for="prevReading">Previous Reading:</label>
        <input type="number" name="prevReading" required>

        <label for="presentReading">Present Reading:</label>
        <input type="number" name="presentReading" required>

        <input type="submit" value="Calculate Bill">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <div class="result">
            <h3>Electricity Bill Details</h3>
            <p><strong>Consumer Name:</strong> <?php echo $consumerName; ?></p>
            <p><strong>Consumer Number:</strong> <?php echo $consumerNumber; ?></p>
            <p><strong>Previous Reading:</strong> <?php echo $prevReading; ?></p>
            <p><strong>Present Reading:</strong> <?php echo $presentReading; ?></p>
            <p><strong>Units Consumed:</strong> <?php echo $unitsConsumed; ?></p>
            <p><strong>Rate:</strong> Rs. <?php echo $rate; ?>/Unit</p>
            <p><strong>Bill Amount:</strong> Rs. <?php echo $billAmount; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>