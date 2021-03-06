<?php
session_start();

if (filter_has_var(INPUT_POST, 'register')) {
    if ($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['password'] == '') {
        echo "All fields are required";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='register.html'>Go Back</a>";
        return;
    }
    if (array_key_exists($_REQUEST['email'], $_SESSION)) {
        echo "Email already exist";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='register.html'>Go Back</a>";
        return;
    }
    $_SESSION[$_REQUEST['email']] = $_REQUEST;
    echo "Account created successfully";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='login.html'>Login now</a>";
}

if (filter_has_var(INPUT_POST, 'login')) {
    if (array_key_exists($_REQUEST['email'], $_SESSION)) {
        if ($_REQUEST['email'] === $_SESSION[$_REQUEST['email']]['email'] && $_REQUEST['password'] === $_SESSION[$_REQUEST['email']]['password']) {
            echo "User is logged in";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='login.html'>Logout</a>";
        } else {
            echo "Invalid email address or password";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='login.html'>Go Back</a>";
        }
    } else {
        echo "Invalid email address or password";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='login.html'>Go Back</a>";
    }
};