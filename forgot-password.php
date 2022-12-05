<?php
include("connections.php");

$email = $password = $cpassword = "";
$emailErr = $passwordErr = $cpasswordErr = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    } else if (isset($_POST['submit'])) {
        if (!empty($email) && !empty($password) && !empty($cpassword)) {
            $check_email = mysqli_query($conn, "SELECT * FROM thecompany where email = '$email'");
            if (mysqli_num_rows($check_email) > 0) {
                while ($row = mysqli_fetch_assoc($check_email)) {
                    $db_id = $row["id"];
                    $db_password = $row["pass"];
                    $db_account_type = $row["account_type"];
                    if ($db_password == $password) {
                        $sql = "UPDATE thecompany SET pass = '$cpassword' WHERE id = '$db_id'";
				        if ($conn->query($sql)) {
                            echo "<div class=\"alert alert-success\" role=\"alert\">Successful</div>";
                        }
                    } else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">Password is incorrect.</div>";
                    }
                }
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Email is not registered.</div>";
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
        <title>Forgot Password</title>
    </head>
    <body>
        <div class="container">
            <div class="cover">
            <img src="img/favicon.png" alt="Melvin Jones Repol" width="100" class="icon">
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
                <button id="forgotPassword" type="submit" name="submit">Forgot Password</button>
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