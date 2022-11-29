<?php
include("connections.php");

$email = $password = $success = "";
$emailErr = $passwordErr = "";

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
    
    if (isset($_POST['createNewAccount'])) {
        header('Location: create.php');
    } else if (isset($_POST['forgotPassword'])) {
        header('Location: forgot-password.php');
    } else if (isset($_POST['submit'])) {
		if (!empty($email) && !empty($password)) {
	        $sql = "SELECT * FROM thecompany";
            $result = $conn->query($sql);
            if ($result-> num_rows > 0) {
		        while($row = $result->fetch_assoc()) {
                   if ($email == $row["email"]) {
			     	    if ($password == $row["pass"]) {
							if ($row["account_type"] == "1"){
								echo "<script>window.location.href='admin';</script>";
							} else {
								echo "<script>window.location.href='user';</script>";
							}
						} else {
							echo "Password is incorrect";
						}
			        } else {
				       echo "Email is not registered";
			        }
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

        <link rel="shortcut icon" href="img/bestlinkcollegeofthephilippines.png">
        <link rel="apple-touch-icon" href="img/bestlinkcollegeofthephilippines.png">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="cover">
            <img src="img/bestlinkcollegeofthephilippines.png" alt="Bestlink College of the Philippines" width="100" class="icon">
            <h1 id="login">Login</h1>
            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                <label class="input" for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email" name="email">
                <?php echo "<div class=\"err\">".$emailErr."</div>" ?> 
                <label class="input" for="password">Password:</label> <br>
                <input id="password" placeholder="**********" type="password" name="password">
                <?php echo "<div class=\"err\">".$passwordErr."</div>" ?> 
                <br>
                <button id="forgotPassword" name="forgotPassword">Forgot Password</button>
                <button id="loginB" type="submit" name="submit">Login</button>
                <hr>
                <button id="createNewAccount" name="createNewAccount">Create New Account</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="assets/lozad.min.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>