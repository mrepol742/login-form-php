<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['createNewAccount'])) {
        header('Location: signup.html');
    } else if (isset($_POST['forgotPassword'])) {
        header('Location: forgot-password.html');
    }
}
?>