<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['createNewAccount'])) {
        header('Location: create.php');
    } else if (isset($_POST['forgotPassword'])) {
        header('Location: forgot-password.php');
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
                <?php if (isset($_GET['error'])) { ?>
                    <p style="float: left;">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
                <label class="input" for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email" name="email"> <br>
                <label class="input" for="password">Password:</label> <br>
                <input id="password" placeholder="**********" type="password" name="password"> <br>
                <br>
                <button id="forgotPassword" name="forgotPassword">Forgot Password</button>
                <button id="loginB" type="submit">Login</button>
                <hr>
                <button id="createNewAccount" name="createNewAccount">Create New Account</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="/assets/lozad.min.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>