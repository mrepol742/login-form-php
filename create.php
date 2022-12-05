<?php
include("connections.php");

$fullname = $email = $password = $cpassword = "";
$fullnameErr = $emailErr = $passwordErr = $cpasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullname"])) {
	    $fullnameErr = "Fullname is required!";
    } else {
	    $fullname = $_POST["fullname"];
    }
    if (empty($_POST["email"])) {
	    $emailErr = "Email is required!";
    } else {
	    $email = $_POST["email"];
    }
    if (empty($_POST["password"])) {
	    $passwordErr = "Password is required!";
    } else {
	    $password = $_POST["password"];
    }
    if (empty($_POST["cpassword"])) {
	    $cpasswordErr = "Confirm Password is required!";
    } else {
	    $cpassword = $_POST["cpassword"];
    }
    if (isset($_POST['loginB'])) {
        header('Location: login.php');
    }
    if (isset($_POST['submit'])) {
	    $chemail = mysqli_query($conn, "SELECT * FROM thecompany WHERE email= '" . $email . "'");
	    $check = mysqli_num_rows($chemail);
        if ($check > 0) {
	    	$emailErr = "Email is already Registered";
	    } else {
            if (!empty($fullname) && !empty($email) && !empty($password)) {
                $sql = "INSERT INTO thecompany (fullname, email, pass, account_type) VALUES ('" . $fullname . "', '" . $email . "', '" . $password . "', '" . 2 . "')";
                if ($conn->query($sql) === TRUE) {
                    echo "<div class=\"alert alert-success\" role=\"alert\">Successful</div>";
                }
            }
	    }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="assets/bootstrap-5.0.2css.min.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/favicon.png">
		<title>Create Account</title>
    </head>
    <body>
        <div class="cursor"></div>
        <div class="container">
            <div class="cover">
            <img src="img/favicon.png" alt="Melvin Jones Repol" width="100" class="icon">
            <h1 id="login">Create Account</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label class="input" for="fullname">Fullname:</label> <br>
                <input id="fullname" placeholder="John Doe" type="text" name="fullname">
                <?php echo "<div class=\"err\">".$fullnameErr."</div>" ?>
                <label class="input" for="email">Email:</label> <br> 
                <input id="email" placeholder="something@gmail.com" type="email" name="email">
                <?php echo "<div class=\"err\">".$emailErr."</div>" ?> 
                <label class="input" for="password">Password:</label> <br> 
                <input id="password" placeholder="**********" type="password" name="password">
                <?php echo "<div class=\"err\">".$passwordErr."</div>" ?> 
                <label class="input" for="cpassword">Confirm Password:</label> <br>
                <input id="cpassword" placeholder="**********" type="password" name="cpassword">
                <?php echo "<div class=\"err\">".$cpasswordErr."</div>" ?>
                <br>
                <button id="createNewAccount" type="submit" name="submit">Create Account</button>
                <button id="loginB" name="loginB">Login</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="assets/lozad.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>