<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contact me form</title>
    <style>
        #new{
            color: #9925be;
            font-weight: bold;
            font-size: 40px;
        }
    </style>
</head>
<body style = " background-color : #ffff99 ; color: #9925be;">
     <div id="container">
       <center id = "new" >Sign Up</center>
        <form name="myform" action = "lab_file_submit.php"  onsubmit="return validateForm()" method="post">
            <div>
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" placeholder="Enter your Name">
            </div>
            <br>
            <div>
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" id="mname" placeholder="Enter your Name">
            </div>
            <br>
            <div>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" placeholder="Enter your Name">
            </div>
            <br>
            <div>
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" placeholder="Enter your Password">
            </div>
            <br>
            <div>
                <label for="cpass">Confirm Password:</label>
                <input type="password" name="cpass" id="cpass" placeholder="ReEnter your Password">
            </div>
            <br>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email">
            </div>
            <br>
            <div>
                <label for="gender">Gender:</label>
                Male<input type="radio" name="gender" id="gender" value ="male">
                FeMale<input type="radio" name="gender" id="gender" value = "female">
            </div>
            <br>
            <div>
                <label for="num">Contact-NO:</label>
                <input type="tel" name="num" id="num" placeholder="Enter your Number">
            </div>
            <br>
            <div>
                <label for="addr">Address:</label>
                <textarea type="text" name="addr" id="addr" rows ="4" cols = "20"></textarea>
            </div>
            <br>
            <div>
                <label for="pin">Pin-Code:</label>
                <input type="text" name="pin" id="pin">
            </div>
            <br>
            <div>
                <label for="city">City:</label>
                <input type="text" name="city" id="city">
            </div>
            <br>
            <div>
                <label for="con">Country:</label>
                <input type="text" name="con" id="con">
            </div>
            <br>
            <div>
                <label for="skill">skills:</label>
                PHP<input type="radio" name="skill" id="skill" value = "php">
                JAVA<input type="radio" name="skill" id="skill" value ="java">
                AJAX<input type="radio" name="skill" id="skill" value = "ajax">
                JQUERY<input type="radio" name="skill" id="skill" value = "jquery">
                .NET<input type="radio" name="skill" id="skill" value = ".net">
            </div>
            <br>
            <div>
                <input type="radio" name="term" id="term">I have read terms and conditions.
            </div>
            <br>
            <div>
                <button id="btn" type="submit">Submit</button>
                <button id="btn" type="reset">reset</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            let x = document.forms["myform"]["name"].value;
            let password = document.forms["myform"]["pass"].value;
            let email = document.forms["myform"]["email"].value;
            var atposition = email.indexOf("@");
            var dotposition = email.lastIndexOf(".");

            //name or text validation
            if (x.match(/[0-9]/)) {
                // notify the user about their mistake 
                alert("Avoid numbers in the first name field, please.");
                // focus the field to make it easy to correct 
                name.focus();
                // prevent the form from submitting 
                return false;
            }

            if (x == "" || x == null) {
                alert("Name must be filled out");
                return false;
            }
            //email validation
            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
                alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
                return false;
            }
            // password length validation
            else if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }
        }
    </script>

</body>
</html>
