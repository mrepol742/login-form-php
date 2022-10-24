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

        <meta name="hostname" content="mrepol742.github.io">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
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
                <label for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email"> <br>
                <label for="password">Password:</label> <br>
                <input id="password" placeholder="**********" type="password"> <br>
                  <br>
                <button id="forgotPassword" name="forgotPassword">Forgot Password</button>
                <hr>
                <button id="createNewAccount" name="createNewAccount">Create New Account</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap.min.js"></script>
        <script src="assets/typed.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>