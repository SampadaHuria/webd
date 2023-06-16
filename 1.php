<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <div id="container">
        <center>Sign up</center>
        <form name="myForm" action="http://localhost/Programs/2.php" method=post>
            <div>
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter your first name">
            </div>
            <br>
            <div>
                <label for="lname">Last name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter your last name">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
            </div>
            <br>
            <div>
                <button type="submit" id="btn">Submit</button>
                <button type="reset" id="btn">Reset</button>
            </div>
            </form>
</div>

    
</body>
</html>