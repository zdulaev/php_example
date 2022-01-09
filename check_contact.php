<?php
    session_start();

    $names = ['username', 'email', 'password', 'age'];


    foreach ($names as $name) {
        if (!empty($_POST[$name]))
            $_SESSION[$name] = $_POST[$name];
    }
    $_SESSION['check_password'] = '';