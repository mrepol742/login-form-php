<?php
$fullname = $gender = $email = $password = $cpassword = "";
$fullnameErr = $genderErr = $emailErr = $passwordErr = $cpasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["fullname"])) {
	 $fullnameErr = "Fullname is required!";
 } else {
	 $fullname = $_POST["fullname"];
 }
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required!";
} else {
    $gender = $_POST["gender"];
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

        <link rel="shortcut icon" href="img/bestlinkcollegeofthephilippines.png">
        <link rel="apple-touch-icon" href="img/bestlinkcollegeofthephilippines.png">
		<title>Create Account</title>

    </head>
    <body>
        <div class="cursor"></div>
        <div class="container">
            <div class="cover">
            <img src="img/bestlinkcollegeofthephilippines.png" alt="Bestlink College of the Philippines" width="100" class="icon">
            <h1 id="login">Create Account</h1>
            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                <label class="input" for="fullname">Fullname:</label> <br>
                <input id="fullname" placeholder="John Doe" type="text" name="name"> <br>
                <label class="gender">Gender:</label> <br>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="fmale" name="gender" value="Female">
                <label for="fmale">Female</label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label><br>
                <label class="input" for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email" name="email"> <br>
                <label class="input" for="password">Password:</label> <br>
                <input id="password" placeholder="**********" type="password" name="password"> <br>
                <label class="input" for="cpassword">Confirm Password:</label> <br>
                <input id="cpassword" placeholder="**********" type="password" name="cpassword"> <br>
                <br>
                <button id="createNewAccount" type="submit">Create Account</button>
                <button id="loginB" name="loginB">Login</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="/assets/lozad.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>