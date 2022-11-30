<?php

if (isset($_POST['login'])) {
     header('Location: login.php');
 }
 if (isset($_POST['createA'])) {
     header('Location: create.php');
 }
 if (isset($_POST['fPassword'])) {
     header('Location: forgot-password.php');
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
        <title>Home - Hello World</title>
    </head>
    <body>


        <div class="cursor"></div>
        <div class="container">
        <div class="cover">
		<form method="post">
            <button name="login">Login</button> <button name="createA">Create Account</button> <button name="fPassword">Forgot Password</button> <br><hr>
            </form>
			<div>
             <h2 id="welc">Hello world</h2>
</div>
</div>
        </div>
        

        <script src="assets/bootstrap-5.0.2js.min.js"></script>
        <script src="assets/lozad.min.js"></script>
        <script src="js/main.js"></script>
        <script src="assets/typed-2.0.12.min.js"></script>
        <script>
            var typed = new Typed('#welc', {
            strings: [
            "Welcome to my System"],
            typeSpeed: 90,
            startDelay: 30,
            backSpeed: 20,
            loop: true,
            showCursor: false,
            fadeOut: true
        });
        </script>
    </body>
</html>