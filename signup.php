<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['loginB'])) {
        header('Location: login.html');
    }
}
?>