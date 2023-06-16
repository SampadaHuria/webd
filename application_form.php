<!-- application_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 30px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
        }
        
        input[type="text"],
        input[type="date"],
        textarea {
            width: 98%;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            background-color: #f9f9f9;
            color: #333333;
            margin-bottom: 20px;
        }
        
        textarea {
            height: 100px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

<body>
    <<fieldset>
    <h2>Application Form</h2>
    <form action="submit_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>
