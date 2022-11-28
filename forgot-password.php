<?php
include("connections.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $password = $cpassword  = "";
    $emailErr = $passwordErr = $cpasswordErr = "";

    
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
    } else if (isset($_POST['createNewAccount'])) {
        header('Location: create.php');
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
        <title>Forgot Password</title>
    </head>
    <body>
        <div class="container">
            <div class="cover">
            <img src="img/bestlinkcollegeofthephilippines.png" alt="Bestlink College of the Philippines" width="100" class="icon">
            <h1 id="login">Forgot Password</h1>
            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                <label class="input" for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email" name="email">
                <?php echo "<div class=\"err\">".$emailErr."</div>" ?> 
                <label class="input" for="prepassword">Previous Password:</label> <br>
                <input id="prepassword" placeholder="**********" type="password" name="password">
                <?php echo "<div class=\"err\">".$passwordErr."</div>" ?> 
                <label class="input" for="newpassword">New Password:</label> <br>
                <input id="newpassword" placeholder="**********" type="password" name="cpassword">
                <?php echo "<div class=\"err\">".$cpasswordErr."</div>" ?> 
                <br>
                <button id="forgotPassword" type="submit">Forgot Password</button>
                <hr>
                <button id="createNewAccount" name="createNewAccount">Create Account</button>
                <button id="loginB" name="loginB">Login</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="assets/lozad.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>