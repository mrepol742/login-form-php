<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="hostname" content="mrepol742.github.io">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/bootstrap-5.0.2css.min.css">
        <link rel="stylesheet" href="css/main.css">
      
    </head>
    <body>
        <div class="container">
            <div class="cover">
            <img src="img/bestlinkcollegeofthephilippines.png" alt="Bestlink College of the Philippines" width="100" class="icon">
            <h1 id="login">Forgot Password</h1>
            <form action="login.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p style="float: left;">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
                <label for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email"> <br>
                <label for="prepassword">Previous Password:</label> <br>
                <input id="prepassword" placeholder="**********" type="password"> <br>
                <label for="newpassword">New Password:</label> <br>
                <input id="newpassword" placeholder="**********" type="password"> <br>
                  <br>
                <button id="forgotPassword" name="forgotPassword">Forgot Password</button>
                <hr>
                <button id="loginB" type="submit">Login</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>